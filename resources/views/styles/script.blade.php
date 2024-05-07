<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!--  Main JS File -->
<script src="assets/js/main.js"></script>

{{-- Sweet Alert --}}
<script src="assets/sweetAlert.js"></script>

<script>
    $(document).ready(function() {
        $('#postForm').submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);

            $('#postComment').text('Adding...');

            $.ajax({
                url: '{{ route('msg_store') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        Swal.fire(
                            'Posted !',
                            'Comment Posted Successfully !',
                            'success'
                        )
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong! (not post comment)",
                        });
                    }
                    $('#postComment').text('Post Comment');
                    $('#postForm')[0].reset();
                    fetchAllEnoUsers();
                }
            })

        });

        fetchAllEnoUsers();

        function fetchAllEnoUsers() {
            $.ajax({
                url: '{{ route('fetchAll') }}',
                method: 'get',
                success: function(response) {
                    $('#comment-here').html(response);
                }
            })
        }





        $('#contactForm').submit(function(e) {
            e.preventDefault();
            $('#load_hide').show();
            const fd = new FormData(this);

            console.log('uncatch eka koheda');
            $.ajax({
                url: '{{ route('contact_store') }}',
                method: 'post',
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                        $('#load_hide').hide();
                        Swal.fire(
                            'Your message has been sent Successfully !',
                            'We will contact you within 24 hours, Thank you!',
                            'success'
                        )

                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong! (not working, enter the correct information and try again.)",
                        });
                    }
                    $('#contactForm')[0].reset();

                }
            })


        });

    })
</script>
