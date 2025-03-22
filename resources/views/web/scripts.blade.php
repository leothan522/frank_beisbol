@section('js')
    <script type="text/javascript">
        let siteCountDown = function () {

            $('#date-countdown').countdown('{{ $cuentaRegresiva }}', function (event) {
                var $this = $(this).html(event.strftime(''
                    /*+ '<span class="countdown-block"><span class="label">%w</span> semanas </span>'*/
                    + '<span class="countdown-block"><span class="label">%D</span> días </span>'
                    + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
                    + '<span class="countdown-block"><span class="label">%M</span> min </span>'
                    + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
            });

        };
        siteCountDown();

        Livewire.on('initVideo', ({ id }) => {
            $('#link_video_' + id).click();
        });

        Livewire.on('launchModal', ({ url }) =>{
            $("#iframe_video").attr("src", 'https://www.youtube.com/embed/' + url);
            $('#launch_modal').click();
        });

    </script>
@endsection
