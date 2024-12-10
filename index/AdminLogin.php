<link rel="stylesheet" href="css/AdminLoginstyle.css">

<!--Modal for admin login-->
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close" data-dismiss="modal" style="cursor: pointer; font-size: 24px;">&times;</span>
        <h4 class="modal-title" style="color:black; font-family: 'Poppins', sans-serif;">LOGIN</h4>
      </div>
      <div class="modal-body title1">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form role="form" method="post" action="admin_per.php?q=index.php">
              <div class="form-group">
                <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" /> 
              </div>
              <div class="form-group">
                <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
              </div>
              <div class="form-group" align="center">
                <input type="submit" name="login" value="Login" class="btn btn-primary" />
              </div>
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
