<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                

                <li class=" <?php  if($_SERVER['REQUEST_URI']=='/employee') echo 'active'?>  has-sub">
                    <a class="js-arrow  " href="#">
                        <i class="fas fa-flag"></i>Employees</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class=" <?php  if($_SERVER['REQUEST_URI']=='/employee') echo 'active'?> " >
                            <a href="/employee"> All Employee</a>
                        </li>
                        <li class="   <?php  if($_SERVER['REQUEST_URI']=='/employee/add') echo 'active'?>  ">
                            <a href="/employee/add">Add Employee</a>
                        </li>
                    </ul>
                </li>
                <li class="   has-sub">
                    <a class="js-arrow  " href="#">
                        <i class="fas fa-file"></i>Documents</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class=" <?php  if($_SERVER['REQUEST_URI']=='/document') echo 'active'?> " >
                            <a href="/document"> All Documents</a>
                        </li>
                        <li class="   <?php  if($_SERVER['REQUEST_URI']=='/document/add') echo 'active'?>  ">
                            <a href="/document/add">Add Document</a>
                        </li>
                    </ul>
                </li>


              
            </ul>
        </nav>
    </div>
</aside>