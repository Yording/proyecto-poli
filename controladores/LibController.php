<?php

Class LibController extends MasterController {


	public function Zebra_Pagination($modelo)
	{
		// $own = new LibController();
  //     	 $pagination=$own->pagination_render($modelo);
 		 $numero_paginacion = 5;
		  View::loadLibrary('Zebra_Pagination-master/Zebra_Pagination');
		$pagination=new Zebra_Pagination();
		$data=  $modelo::count();
		$count=$data->fetch_assoc();
		$inicio_paginacion=($pagination->get_page()-1) *$numero_paginacion;
        $pagination->records($count['count']);
        $pagination->records_per_page($numero_paginacion);
        return $modelo::getAll($inicio_paginacion,$numero_paginacion);
	}
	public function pagination_render($modelo)
	{
		$numero_paginacion = 5;
                View::loadLibrary('Zebra_Pagination-master/Zebra_Pagination');
		$pagination=new Zebra_Pagination();
		$data=  $modelo::count();
		$count=$data->fetch_assoc();
		$inicio_paginacion=($pagination->get_page()-1) *$numero_paginacion;
        $pagination->records($count['count']);
        $pagination->records_per_page($numero_paginacion);
        return $pagination;
	}

}
