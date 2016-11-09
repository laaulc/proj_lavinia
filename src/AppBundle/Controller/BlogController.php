<?php 

	namespace AppBundle\Controller;

	use Symfony\Bundle\FrameworkBundle\Controller\Controller;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;

	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

	class BlogController extends Controller {

		/**
		* @Route ("/blog", name="index")
		*/

		public function indexAction(Request $request){

			$nome = $request->request->get ('nome');
			$senha = $request->request->get ('senha');
			$idade = $request->request->get ('idade');

			if ($nome == 'Lavínia' && $senha == '110799' && $idade == 17){
				return $this->redirectToRoute (
					'home_page',
					array ('request' => $request),
					307
					);
			}

			return $this->render (
				'blog/index.html.php',
				array()
			);

			//return new Response ("Página Inicial");
		}

		/**
		* @Route ("/blog/home", name="home_page")
		*/

		public function homeAction(){

			$request = Request::createFromGlobals ();
			$nome = $request->request->get ('nome');
			$senha = $request->request->get ('senha');
			$idade = $request->request->get ('idade');

			return $this->render (
				'blog/home.html.php',
				array('nome'=>$nome, 'senha'=>$senha, 'idade'=>$idade)
				);

		}


		/**
		* @Route ("/blog/home/detalhe", name="blog_detalhe")
		*/
		public function detalheAction(){
			$req = Request::createFromGlobals ();
			$id = $req->query->get('id');
			return new Response ("Detalhes: ".$id);
		}

	}

 ?>


 ?>