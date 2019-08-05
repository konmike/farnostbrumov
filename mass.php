<?php if(date('w') == 0 && date('d') != 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Neděle: 7:30 / 9:00 / 10:30</a></li>
<?php } else if(date('w') == 0 && date('d') == 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Neděle: 7:30 / 9:00 / 15:00</a></li>
<?php } else if(date('w') == 1 && date('d') != 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Pondělí: 7:30</a></li>
<?php } else if(date('w') == 1 && date('d') == 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Pondělí: 16:00</a></li>
<?php } else if(date('w') == 2 && date('d') != 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Úterý: 17:00</a></li>
<?php } else if(date('w') == 2 && date('d') == 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Úterý: 16:00</a></li>
<?php } else if(date('w') == 3 && date('d') != 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Středa: 17:00</a></li>
<?php } else if(date('w') == 3 && date('d') == 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Středa: 16:00</a></li>
<?php } else if(date('w') == 4 && date('d') != 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Čtvrtek: 17:00</a></li>
<?php } else if(date('w') == 4 && date('d') == 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Čtvrtek: 16:00</a></li>
<?php } else if(date('w') == 5 && date('d') != 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Pátek: 17:00</a></li>
<?php } else if(date('w') == 5 && date('d') == 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Pátek: 16:00</a></li>
<?php } else if(date('w') == 6 && date('d') != 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Sobota: 7:30</a></li>
<?php } else if(date('w') == 6 && date('d') == 13){ ?>
	<li><a href="http://localhost/wordpress/index.php/bohosluzby/" title="Bohoslužby" class="list__link list__link--today">Sobota: 15:00</a></li>
<?php } ?>
