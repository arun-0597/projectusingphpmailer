<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sent mail</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <input class="subject" type="text" placeholder="Enter Subject" /><br><br>
    <input class="displayname" type="text" placeholder="Display Name" /><br><br>
    <textarea class="body" placeholder="Mail body"></textarea><br><br>
    <input class="file" type="file" name="fileupload" placeholder="Upload files" /><br><br>
    <button class="subject" >submit</button>
</body>
</html>

<script>
    $("button").click(function() {
        var files = new FormData();
        files.append("attachment", $(".file")[0].files[0]);
        files.append("subject", $(".subject").val());
        files.append("displayname", $(".displayname").val());
        files.append("body", $(".body").val());
        $.ajax({
            type: "POST",
            url: 'mail.php',
            data: files,
            processData: false,
            contentType:false
        }).done(function(result) {
            console.log(result);
        })
    });
</script>