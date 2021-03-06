<?php require APPROOT . '/views/inc/adminheader.php'; ?>
  <main id="main-doc">  
    <h2 class="text-uppercase text-center text-white mt-0 mb-3"> Supprimer</h2>
      <form action="<?php echo URLROOT; ?>/adminposts/delete/<?php echo $data['post_id']; ?>" method="post">
        <div class="card card-body bg-light mt-2">
          <div class="row mx-auto mb-2">
            <div class="form-group mr-5">
              <label for="title">Titre: <sup>*</sup></label>
              <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
              <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
            </div>
            <div class="form-group mr-5">
              <label for="date">Date: <sup>*</sup></label>
              <input type="date" name="date" class="form-control form-control-lg" value="<?php echo $data['date']; ?>">
            </div>
              <br><br>
            </div>     
            <div class="form-group">
              <label for="body">Contenu: <sup>*</sup></label>
              <textarea id="mytextarea" name="chapter" form-control form-control-lg <?php echo (!empty($data['chapter_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['chapter']; ?></textarea>
              <span class="invalid-feedback">
              <?php echo $data['chapter_err']; ?></span>
            </div>              
            <div class="row">
              <div class="col">
                <input type="submit" class="btn btn-info btn-block mt-3" value="Supprimer">                 
              </div>
            </div>
          </div> 
      </form>     
  </main>






      
        




