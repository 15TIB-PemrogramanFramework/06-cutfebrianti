<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('home').'"><i class="fa fa-dashboard"></i> Dashboard</a>
	</li>	
	<li>
			<a href="#"><i class="fa fa-table fa-fw"></i>Table<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="'.site_url('makanan').'">Data makanan</a>
				</li>
				

				<li>
					<a href="'.site_url('member/data_member').'">Data Member</a>
				</li>
				<li>
					<a href="'.site_url('pesan').'">Data Pemesanan</a>
				</li>
				<li>
					<a href="'.site_url('konfirmasi').'">Konfirmasi Pemesanan</a>
				</li>
			</ul>
		</li>';
	}

