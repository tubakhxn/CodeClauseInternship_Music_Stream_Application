<!-- REQUIRE VIEW HEADER -->
<?php require 'assets/templatses/header.php'; ?>

        <!-- hacked Begin Page Content ---->
        <div class="container-fluid" style="background-image: url(http://localhost/Uprising/assets/images/awesome-feat-bg-1.png); background-size: cover; height: 90%;">

          <?php if( isset($_GET["action"] ) ) : ?>

            <?php if ($_GET["action"] === "delete") : ?>
              <?php if ($_SESSION["data"]["role"] === "admin"): ?>
                <?php  
                  if( $db->deleteTrack($_GET['id']) ) {
                    echo "<script>alert('Berhasil Delete'); document.location.href = 'dashboard.php';</script>";
                  }
                ?>
              <?php else: ?>
                echo "<script>alert('Gagal Delete'); document.location.href = 'dashboard.php';</script>";
              <?php endif ?>
            <?php exit; endif; ?>

            <?php if ($_GET["action"] === "upload" && isset($_SESSION["signIn"])) : ?>
                
                <div class="row pb-5 justify-content-center">
                  <div class="col-md-5 p-3 bg-white border border-primary rounded">
                    <h3>Upload Tracks</h3>
                    <hr>
                    <form method="POST" action="" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Artist</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="artist" placeholder="Artist name..">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Title of Tracks</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="Title of Tracks...">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Image Cover</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Tracks (format must be .mp3 / .wav)</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="track">
                      </div>
                      <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                      <br>
                      <br>
                      <a href="dashboard.php">Back to Dashboard</a>
                      <br>
                      <br>
                    </form>
                  </div>
                </div>

            <?php else: ?>
              <?php echo "<script>alert('Sign In terlebih dahulu.'); document.location.href = 'index.php';</script>"; ?>
            <?php endif ?>

          <?php else: ?>
            <div class="row">
<!-- each data  -->
              <?php foreach ($allTracks as $track) : ?>
                <div class="col-md-2 coldcard">
                  <div class="card wow bounceInUp p-3" href="#" data-wow-duration="1s" data-wow-delay="0.2s">
                    <img src="assets/track images/<?= $track['track_img']; ?>" class="imgtrack mb-2 mr-1 ml-1">
                    <b class="d-inline-block text-truncate mr-1 ml-1" style="max-width: 150px;"><?= $track['track_title']; ?></b>
                    <p class="d-inline-block text-truncate mr-1 ml-1" style="max-width: 150px;"><?= $track['track_artist']; ?></p>
                    <span class="mr-1 ml-1">
                      <i class="fas fa-play-circle iCon text-white bg-primary btnPp" data-name="<?= $track['track_name']; ?>"></i>
                      <i class="fas fa-heart iCon text-white bg-danger"></i>
                      <?php if (isset($_SESSION["signIn"])) : ?>
                        <?php if ($_SESSION["data"]["role"] === "admin"): ?>
                          <a class="fas fa-trash iCon text-white bg-danger" href="?action=delete&id=<?= $track['id']; ?>"></a>
                        <?php endif ?>
                      <?php endif ?>
                    </span>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          <?php endif; ?>

        </div>
        <!-- /.container-fluids -->

<!-- REQUIRE VIEW FOOTER -->
<?php require 'assets/templates/footer.php'; ?>
