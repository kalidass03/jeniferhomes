<?php
$prev = $pagenum - 1;
$next = $pagenum + 1;
$lastpage = ceil($total_records/$per_page_records);


$pagination = '<ul class="pagination" id="list_t_search">';
if($lastpage > 1)
{
	//previous button
	if ($pagenum > 1) 
		$pagination.= '<li><a class="previous" href="'.$targetpage.'?pagenum='.$prev.'">&laquo;</a></li>';
	
	if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
	{	
		for ($counter = 1; $counter <= $lastpage; $counter++)
		{
			if ($counter == $pagenum)
				$pagination.= '<li class="active"><a >'.$counter.'</a></li>';
			else
				$pagination.= '<li><a href="'.$targetpage.'?pagenum='.$counter.'">'.$counter.'</a></li>';
		}
	}
	elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
	{
		//close to beginning; only hide later pages
		if($pagenum < 1 + ($adjacents * 2))		
		{
			for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
			{
				if ($counter == $pagenum)
					$pagination.= '<li class="active"><a>'.$counter.'</a></li>';
				else
					$pagination.= '<li><a href="'.$targetpage.'?pagenum='.$counter.'">'.$counter.'</a></li>';
			}
			$pagination.= "<li><a>...</a></li>";
			$pagination.= '<li><a href="'.$targetpage.'?pagenum='.$lastpage.'">'.$lastpage.'</a></li>';
		}
		//in middle; hide some front and some back
		elseif($lastpage - ($adjacents * 2) > $pagenum && $pagenum > ($adjacents * 2))
		{
			$pagination.= '<li><a href="'.$targetpage.'?pagenum=1">1</a></li>';
			$pagination.= '<li><a href="'.$targetpage.'?pagenum=2">2</a></li>';
			$pagination.= "<li><a>...</a></li>";
			$iii=1;
			for ($counter = $pagenum - $adjacents; $counter <= $pagenum + $adjacents; $counter++)
			{
				if ($counter == $pagenum)
					$pagination.= '<li class="active"><a>'.$counter.'</a></li>';
				else
					$pagination.= '<li><a href="'.$targetpage.'?pagenum='.$counter.'">'.$counter.'</a></li>';
			}
			$pagination.= "<li><a>...</a></li>";
			$pagination.= '<li><a href="'.$targetpage.'?pagenum='.$lastpage.'">'.$lastpage.'</a></li>';
		}
		//close to end; only hide early pages
		else
		{
			$pagination.= '<li><a href="'.$targetpage.'?pagenum=1">1</a></li>';
			$pagination.= '<li><a href="'.$targetpage.'?pagenum=2">2</a></li>';
			$pagination.= "<li><a>...</a></li>";
			for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
			{
				if ($counter == $pagenum)
					$pagination.= '<li class="active"><a>'.$counter.'</a></li>';
				else
					$pagination.= '<li><a href="'.$targetpage.'?pagenum='.$counter.'">'.$counter.'</a></li>';
			}
		}
	}
	
	//next button
	if ($pagenum < $counter - 1) 
		$pagination.= '<li><a href="'.$targetpage.'?pagenum='.$next.'"> &raquo;</a></li>';
}
echo $pagination."</ul>";
?>


<?php /*

<div class="span6">          
<div class="dataTables_paginate paging_bootstrap pagination">
							<ul>
                                  <!--  echo "<a class='previous' href='#'> <-Previous</a> ";-->
       
           <input type="hidden" id="total_page" name="total_page" value="<?php echo $toal_pages;?>" /> 
           <input type="hidden" id="pagenum" name="pagenum" value="<?php echo $pagenum; ?>" />                    
                               
                                
                              <?php 
							  
							   if ($pagenum != 1) { ?>
                          <li><a class='first' href="#">First</a></li>
                         <li><a class='previous' href="#">Prev</a></li>
                        
                               <?php 
							   }
                                              
                                              
                                              
            for ($i= $pagenum; $i <=$number_limits and $i <$toal_pages; $i++) { ?>
               <li><a class="current" href="#"><?php echo $i ;?></a></li>
	            <?php  }
                   
     
         if($pagenum < $toal_pages) {?>
         <li><a class='next' href="#">Next</a></li>
         <li><a class='last' href="#">Last</a></li>
	
       <?php    }     
        ?>                                    
                                              
                                              
                               	</ul>
								</div>
							</div>	
							*/?>