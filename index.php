<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <form id="addForm">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                        <span>
                            <p class="text-danger" id="titleError"></p>
                        </span>
                    </div>
                    <div class="form-group mt-3">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
                        <span>
                            <p class="text-danger" id="contentError"></p>
                        </span>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary" id="saveBtn">Submit</button>
                        <button type="button" class="btn btn-primary" id="updateBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#saveBtn').click(function(e) {
                e.preventDefault();
                let title = $('#title').val();
                let content = $('#content').val();
                // alert(content);
                // return;

                if (title == '') {
                    $('#titleError').text('Title is required');
                } else {
                    $('#titleError').text('');
                }
                if (content == '') {
                    $('#contentError').text('Content is required');
                } else {
                    $('#contentError').text('');
                }
                if (title != '' && content != '') {
                    $.ajax({
                        url: 'controller/save.php',
                        type: 'POST',
                        data: {
                            type: 1,
                            title: title,
                            content: content
                        },
                        success: function(response) {
                            if (response == 1) {
                                alert('Post Added Successfully');
                                $('#addForm')[0].reset();
                                window.location.href = 'index.php';
                            } else {
                                alert('Something went wrong');
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>