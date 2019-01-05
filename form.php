
<div class="container">
    <div class="jumbotron">
    <h1>Welcome</h1>
    <h6 id="form_dec">Please enter a name and a email address and a valid file</h6>
        <form class="form-group" method="POST" action="" enctype="multipart/form-data">

            <input class="form-control<?=$errors["userName"]?' red':""?>" type="text" name="userName" placeholder="name" value="<?=$user_name?>" required />
            <?=$errors["userName"]?'<span class="emptyFiledsAlerts">'.$errors["userName"].'</span>':""?>

            <input id="Pass" class="form-control<?=$errors["email"]?' red':""?>" type="email" name="email" placeholder="email" value="<?=$email?>" required />
            <?=$errors["email"]?'<span class="emptyFiledsAlerts">'.$errors["email"].'</span>':""?>
            
            <label for="file" class="form-control text-left file<?=$errors["file"]?' red':""?>"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Choose a file to upload </label>
            <?=$errors["file"]?'<span id="fileErrorMsg" class="emptyFiledsAlerts">'.$errors["file"].'</span>':""?>
            <span id="fileName" class="emptyFiledsAlerts"></span>
            <input type="file" name="file" id="file" class="inputfile" accept="image/jpg, image/jpeg">
            
            <button id="btn" class="btn btn-primary form-control" type="submit">upload</button>

            <script src="script.js"></script>
        </form>
    </div>
</div>
