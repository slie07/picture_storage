<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>

                            <?php 

                            // $user = new User();

                            // $user->username = "Example_username";
                            // $user->username = "Example_password";
                            // $user->username = "Stevano";
                            // $user->username = "Lie";

                            // $user->create();

                    
                            $user = User::find_user_by_id(3);
                            $user->delete();

                            

                            // $user->last_name = "WILLIAMS";
                            // $user->update();



                         


                             ?>
                            

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->