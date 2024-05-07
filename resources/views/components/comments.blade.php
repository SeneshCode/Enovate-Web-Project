<div class="blog-comments">



    <div id="comment-here" class="comment">


    </div><!-- End comment #1 -->


    <div class="reply-form">
        <h4>Leave a Reply</h4>
        <p>Your email address will not be published. Required fields are marked * </p>
        <form action="#" method="POST" id="postForm" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 form-group">
                    <input name="user_name" type="text" class="form-control" placeholder="Your Name*" required>
                </div>
                <div class="col-md-6 form-group">
                    <input name="email" type="text" class="form-control" placeholder="Your Email*" required>
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                    <textarea name="msg" class="form-control" placeholder="Your Comment*" required></textarea>
                </div>
            </div>
            <button id="postComment" type="submit" class="btn btn-primary">Post Comment</button>
        </form>



    </div>






    <!-- Modal -->
    {{-- <div class="modal fade" id="replymodeltarget" tabindex="-1" aria-labelledby="replymodeltargetLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="replymodeltargetLabel">Reply to Name</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Your email address will not be published. Required fields are marked * </p>

                    <div class="row g-1 m-1">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Your Name*">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="text" class="form-control" placeholder="Your Email*">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group m-1">
                            <input name="website" type="text" class="form-control"
                                placeholder="Your Website (Optional)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group m-1">
                            <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-my"  data-bs-dismiss="modal">Post Reply</button>
                </div>
            </div>
        </div>
    </div> --}}


</div>
