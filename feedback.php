<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live FeedBack</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!--  -->
        <div class="row">
            <div class="col-4" align="left">
                <img src="img/srkrlogo.jpg" alt="" height="200px" widht="200px">
            </div>
            <div class="col-4" align="center">
                <img src="img/spardha.jpg" alt="" height="100px" widht="100px">

            </div>
            <div class="col-4" align="right" style="margin-top:40px">
                <img src="img/ihub.jpg" alt="" height="100px" widht="100px">
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="col">
                <h4>Spardha2K19 Live FeedBack</h4>
            </div>
        </div>
        <br><br>
        <form action="submit.php" method="post" onsubmit="return validate();">
            <div class="col" style="text-align: center;color:red;">* Marked Fields are Mandatory</div>

            <div class="row">
                <div class="col" style="text-align: center;">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Team Name<span class="required">*</span></label>
                        <input type='text' class="form-control" id="tn" name='team' rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Student Name<span class="required">*</span></label>
                        <input type='text' class="form-control" id="sn" name='stu' rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Comments<span class="required">*</span></label>
                        <textarea class="form-control" id="cmt" name='cmt' rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" style="text-align: center;">
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

<script>
    function validate() {
        var tn = $('#tn').val();
        var sn = $('#sn').val();
        var cmt = $('#cmt').val();

        if ((tn == '') || (sn == '') || (cmt == '')) {
            alert("Please Fill all the Required Fields");
            return false;
        }
        return true;
    }
</script>

</html>