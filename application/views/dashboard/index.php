<div class="container">
	Hai, <?= AuthData()->nama ?> <a href="<?= base_url('/logout?token='.$this->session->login_token) ?>" class="btn btn-success">Logout</a>
</div>