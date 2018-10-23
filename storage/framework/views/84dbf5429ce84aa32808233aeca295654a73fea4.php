<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <a class="navbar-brand" href="#">
        <div class="logo-container ">
            <div class="logo">
                <img src="../resources/fsrcmslogo.png" alt="FSRcms LOGO" rel="tooltip">
            </div>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Pocetna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Link</a>
                    <a class="dropdown-item" href="#">Link</a>
                    <a class="dropdown-item" href="#">Link</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0 pomakni">
            <?php if(Auth::check()): ?>
                <a  href="#" class="btn btn-light"  type="submit" style="margin-right:8px;"><?php echo e(Auth::user()->name); ?></a>
                <a  href="logout" class="btn btn-luksha" type="submit">Logout</a>
            <?php else: ?>
                <a  href="login" class="btn btn-light"  type="submit" style="margin-right:8px;">Login</a>
                <a  href="register" class="btn btn-luksha" type="submit">Register</a>
            <?php endif; ?>

        </form>
    </div>
</nav>