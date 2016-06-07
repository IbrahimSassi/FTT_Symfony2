<?php
namespace FTT\AdherentBundle\Controller;
use FTT\AdminBundle\Entity\Transaction;
use Beelab\PaypalBundle\Paypal\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class PaiementController extends Controller {
    public function indexAction() {
        return $this->render('FTTAdherentBundle:Default:paiement.html.twig', array());
    }
    public function paymentAction(Request $request) {
        $request = $this->getRequest();
        $cookies = $request->cookies;
        $amount = $cookies->get('montant');
        $transaction = new Transaction($amount);
        try {
            $response = $this->get('beelab_paypal.service')->setTransaction($transaction)->start();
            $this->getDoctrine()->getManager()->persist($transaction);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirect($response->getRedirectUrl());
        } catch (Exception $e) {
            throw new HttpException(503, 'Payment error', $e);
        }
    }
    /**
     * The route configured in "cancel_route" (see above) should point here
     */
    public function canceledPaymentAction(Request $request) {
        $token = $request->query->get('token');
        $transaction = $this->getDoctrine()->getRepository('FTTAdminBundle:Transaction')->findOneByToken($token);
        if (is_null($transaction)) {
            throw $this->createNotFoundException(sprintf('Transaction with token %s not found.', $token));
        }
        $transaction->cancel(null);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirect($this->generateUrl('echec_recharge'));
    }
    /**
     * The route configured in "return_route" (see above) should point here
     */
    public function completedPaymentAction(Request $request) {
        $token = $request->query->get('token');
        $transaction = $this->getDoctrine()->getRepository('FTTAdminBundle:Transaction')->findOneByToken($token);
        if (is_null($transaction)) {
            throw $this->createNotFoundException(sprintf('Transaction with token %s not found.', $token));
        }
        $this->get('beelab_paypal.service')->setTransaction($transaction)->complete();
        $this->getDoctrine()->getManager()->flush();
        if (!1 == 2) {
            return $this->redirect($this->generateUrl('echec_recharge'));
        }
        return $this->redirect($this->generateUrl('succes'));
    }
}