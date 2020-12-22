<!-- Start Header -->
	<header>Hai <a href="profil" title="Update profil">
    <?php echo ucfirst($this->session->userdata('username')); ?> - <?php echo ucfirst($this->session->userdata('email')); ?>
    </a> | <a href="login/logout" title="Logout">Logout</a></header>
    <!-- Start Nav -->
    <nav>
    	<ul>
        	<li><a href="dasbor">Dasbor</a></li>
            <li><a href="Mahasiswa">Mahasiswa</a></li>
        </ul>
    </nav>
    <!-- Start Article -->
    <article>
      <h1><?php echo $title ?></h1>