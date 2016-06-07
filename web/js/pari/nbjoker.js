                    $(document).ready(function () {
                        $("input[name='joker']").change(function () {
                            var maxAllowed = 1;
                            var cnt = $("input[name='joker']:checked").length;
                            if (cnt > maxAllowed) {
                                $(this).prop("checked", "");
                                alert('Maximum ' + maxAllowed + ' joker .');
                            }
                        });
                    });
