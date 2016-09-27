

<?php include('header.php'); ?>

             <div class="box box-info">
            <div class="box-header with-border">
              <a href='<?= base_url('ad_login/borrower_user');?>' class='btn btn-danger'>borrow detail</a>||<a href='dashboard.php?option=lender' class='btn btn-danger'>lender detail</a>
                    <br/>
                    <br/>

          <?php

                $option = isset($_REQUEST['option'])==TRUE?$_REQUEST['option']:"";
                 // echo $option;
                    if($option=='borrow')
                    {
                      include('borrow_detail.php');
                    }
                    else
                    {
                       include('lend_detail.php');
                     }
 
          
               ?>

              </div>
          <!-- /.box -->
        </div>
               
   

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('footer.php');?>