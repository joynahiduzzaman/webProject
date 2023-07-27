$(document).ready(function() {
    $("#submitReply").click(function() {
        var replyText = $("#replyText").val();

        var newReply = `
            <div class="card mt-3">
                <div class="card-header">
                    User
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>${replyText}</p>
                        <footer class="blockquote-footer">Just now</footer>
                    </blockquote>
                </div>
            </div>`;
        $("#repliesContainer").append(newReply);
        $("#replyText").val('');
    });
});



