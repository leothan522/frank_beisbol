@section('js')
    <script type="text/javascript">
        var siteCountDown = function() {

            $('#date-countdown').countdown('{{ $lastPartido ? $lastPartido->fecha : now() }}', function(event) {
                var $this = $(this).html(event.strftime(''
                    /*+ '<span class="countdown-block"><span class="label">%w</span> semanas </span>'*/
                    + '<span class="countdown-block"><span class="label">%D</span> días </span>'
                    + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
                    + '<span class="countdown-block"><span class="label">%M</span> min </span>'
                    + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
            });

        };
        siteCountDown();
    </script>
@endsection
