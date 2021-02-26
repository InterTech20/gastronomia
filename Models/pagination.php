<?php

	function paginate($reload, $page, $tpages, $adjacents) {
				
				$prevlabel = "&lsaquo; Anterior &nbsp;";
				$nextlabel = "Siguiente &rsaquo;&nbsp;";
				$out = '<ul class="pagination pagination-large text-primary">';
				
				if($page==1) {
					$out.= "<li class='disabled text-muted'><span><a class='page-link' >$prevlabel</a></span></li>";
				} else if($page==2) {
					$out.= "<li><span><a class='page-link ' href='javascript:void(0);' onclick='load(1)'>$prevlabel</a></span></li>";
				}else {
					$out.= "<li><span><a class='page-link' href='javascript:void(0);' onclick='load(".($page-1).")'>$prevlabel</a></span></li>";

				}
				
				if($page>($adjacents+1)) {
					$out.= "<li><a class='page-link' href='javascript:void(0);' onclick='load(1)'>1</a></li>";
				}
				
				if($page>($adjacents+2)) {
					$out.= "<li><a class='page-link'>...</a></li>";
				}

				
				$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
				$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
				for($i=$pmin; $i<=$pmax; $i++) {
					if($i==$page) {
						$out.= "<li class='active'><a class='page-link'>$i</a></li>";
					}else if($i==1) {
						$out.= "<li><a class='page-link' href='javascript:void(0);' onclick='load(1)'>$i</a></li>";
					}else {
						$out.= "<li><a class='page-link' href='javascript:void(0);' onclick='load(".$i.")'>$i</a></li>";
					}
				}

				if($page<($tpages-$adjacents-1)) {
					$out.= "<li><a class='page-link'>...</a></li>";
				}

				if($page<($tpages-$adjacents)) {
					$out.= "<li><a class='page-link' href='javascript:void(0);' onclick='load($tpages)'>$tpages</a></li>";
				}

				if($page<$tpages) {
					$out.= "<li><span><a class='page-link' href='javascript:void(0);' onclick='load(".($page+1).")'>$nextlabel</a></span></li>";
				}else {
					$out.= "<li class='disabled text-muted'><span><a class='page-link'>$nextlabel</a></span></li>";
				}
				
				$out.= "</ul>";
				return $out;
	}

?>