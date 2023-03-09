<?php

use App\Models\Etudiant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
C'est ici que vous pouvez enregistrer des routes Web pour votre application. Ces
| les routes sont chargées par le RouteServiceProvider et toutes seront
| être affecté au groupe middleware "web". Faites quelque chose de génial !
|
*/
 // ************LES NOTION DE ROUTES**********
    //============Premiér Méthode=============
// Route::get('/', function () {
//      return view('base')->with("nom", "Ndour");
//  });
//  Route::get('/about', function () {
//      return view('pages/about')
//  ->with("prenom", "Astou")->with("nom", "Ndour");
 //   ->with("prenom", "Astou")->with("nom", "Ndour");:sa c'est une senase de méthode.
//  });


 //============Deuxiém Méthode=============
// Route::get('/about', function()
 // {
 //     return view('pages/about')
 //     ->withDepertement('Informatique')
 //     ->withService('Dévelopment');
 //     // ->withPrenom('Astou')->withNom('Ndour'): Isi on parle with rassoursise.
 // });


//============Troisiem Méthode=============
// Route::get('/about', function () {
//     return view('pages/about')
//     ->with([
//         'prenom'=>'Astou',
//         'nom'=>'Diouf'
//     ]);

// });



//============Qutereme Méthode=============
// Route::get('/about', function () {

//     $tab = [
//         'prenom'=>'Astou',
//         'nom'=>'Diouf',
//     ];
//     $nomComplet = "Astou Ndour";
//   return view('pages/about', compact('tab', 'nomComplet'));
// });



//============Cinquem Méthode=============
// Route::get('about', function()
// {
//     $view = view('pages.about');
//     $view->nom = 'Ndour';
//     $view->prenom = 'Astou';
//     $view->adresse = 'Diagane';

//     return $view;

// });


                                //05/03/2023
//*****************LARAVEL BLADE****************
  //==========Premier méthodde==========
   //Route::get('/', function ()
   //{
   //$jours = ["lundi","Mardi","Mercredi","Jeudi","Venderedi","Samdi","Dimanche"];
   // return view('base')->with("jours", $jours);
   //});


//   //*****************LA PAGES BASE****************
  //==========Premier méthodde==========
//   Route::view('/about','pages/about');
//   Route::view('/service','pages/service');
//   Route::view('/contact','pages/contact');
  Route::resource('etudiant',EtudiantController::class);
                      

//**************LES INJECTION DE DERVICE***************
//=========Premiére Méthode===========


//**************LA COMMUNICATION AVEC LA BD***************
//======================1.SQL Brute=========================
//Selectionner la liste des articles
// Route::get('/', function()
// {
//     $article = DB::select('select * from article');
//     dd($article);
//     return view('base');
// });

//Selectionner la premiére article
//=========Premiére Méthode===========
// Route::get('/', function()
// {
//     $article = DB::select('select * from article limit 1');
//     dd($article);
//     return view('base');
// });
// //=========Deuuxiém Méthode===========
// Route::get('/', function()
// {
//     $article = DB::select('select * from article ')[0];
//     dd($article);
//     return view('base');
// });

//Apartire du premiér article recupére  mio deux article
//=========Premiére Méthode===========
// Route::get('/', function()
// {
//     $article = DB::select('select * from article limit 1,2');
//     dd($article);
//     return view('base');
// });

// //Apartire de 2eme article recupére  mio un article
// // //=========Deuuxiém Méthode===========
// Route::get('/', function()
// {
//     $article = DB::select('select * from article limit 1 offset 2');
//     dd($article);
//     return view('base');
// });


//====================INSERTION=======================
//=========Premiére Méthode===========
//  Route::get('/', function()
//  {
//      $ok = DB::insert("INSERT INTO article VALUES
//             (null, :titre, :contenu, :etat, :date)",
//         [
//             'titre'=>'Titre11',
//             'contenu'=>'Contenu11',
//             'etat'=>1,
//             'date'=>date('Y-m-d H:i:s')
//         ]);
//      dd($ok);
//      return view('base');
//  });

//=========Deuuxiém Méthode===========
// Route::get('/', function()
// {

//     $titre ='Titre12';
//     $contenu = 'Contenu12';
//     $etat = 0;
//     $date= date('Y-m-d H:i:s');

//     $ok = DB::insert("INSERT INTO article VALUES
//         (null, :titre, :contenu, :etat, :date)",
//        compact ('titre','contenu', 'etat','date'));

//     dd($ok);
//     return view('base');
// });

// //=========Troisiiém Méthode===========
// Route::get('/', function()
// {
//     $titre ='Titre13';
//     $contenu = 'Contenu13';
//     $etat = 1;
//     $date = date('Y-m-d H:i:s');

//     $ok = DB::insert("INSERT INTO article VALUES (null, ?, ?, ?, ?)",
//        [$titre,$contenu,$etat , $date]);

//     dd($ok);
//     return view('base');
// });


// //====================MODIFICATION=======================
// //=========Premiére Méthode===========
// Route::get('/', function()
// {
//     $ok = DB::update("UPDATE article SET titre = 'TitreModifier' WHERE id =2 ");


//     dd($ok);
//     return view('base');
// });

//====================SUPPRESION=======================
//=========Premiére Méthode===========
// Route::get('/', function()
// {
//     $ok = DB::delete("DELETE FROM article  WHERE id =10");

//     dd($ok);
//     return view('base');
// });



//======================FLUENT QUERY BUILDER=========================
       //*****************1.Sélection********************** */
          // //Selectionner la liste des articles
          //=========Premiére Méthode===========
          // Route::get('/',function()
          // {
          //     $article = DB::table('article')->get();
          //     dd($article);
          //     return view('base');
          // });
          //=========Deusiém Méthode===========
        //   Route::get('/',function()
        //   {
        //       $article = DB::table('article')->all();
        //       dd($article);
        //       return view('base');
        //   });

          //=========Troisiém Méthode===========

//   //Selectionner l'id de toutes les articles
//   Route::get('/',function()
//   {
//       $article = DB::table('article')->get(['id']);
//       dd($article);
//       return view('base');
//   });

  // //Selectionner la liste des id & titres
//   Route::get('/',function()
//   {
//       $article = DB::table('article')->get(['id', 'titre']);
//       dd($article);
//       return view('base');
//   });

//Selectionner la premér article
//   Route::get('/',function()
//   {
//       $article = DB::table('article')->first();
//       dd($article);
//       return view('base');
//   });

//Selectionner le titre de premér article
//   Route::get('/',function()
//   {
//       $article = DB::table('article')->first();
//     //   dd($article->id);
//     // dd($article->titre);
//     // dd($article->contenu);
//     dd($article->date);
//       return view('base');
//   });

  //Selectionner le contenu de premér article
//   Route::get('/',function()
//   {
//       $article = DB::table('article')->first()->contenu;
//      dd($article);
//       return view('base');
//   });

//   //Deusiém méthéode de faire
//   Route::get('/',function()
//   {
//       $article = DB::table('article')->first();
//      dd($article->contenu);
//       return view('base');
//   });

//   //Sléectionner l'article qui à pour tittre "titre 2"
//   Route::get('/',function()
//   {
//     //   $article = DB::table('article')->whereId(2)->get();
//     $article = DB::table('article')->where('id',2)->get();
//      dd($article);
//       return view('base');
//   });

//    //Sléectionner tous les article dont leur id >= 2"
//    Route::get('/',function()
//    {

//      $article = DB::table('article')->where('id', '>=', 2)->get();
//       dd($article);
//        return view('base');
//    });

//         //Sléectionner tous les article dont leur id  est diffenrent de<> 2""
//      Route::get('/',function()
//      {
//        $article = DB::table('article')->where('id', '<>', 2)->get();
//         dd($article);
//          return view('base');
//      });

    //Sléectionner tous les article dont leur tire est titre4""
    //==========Premiéer méthéode de faire==============
    // Route::get('/',function()
    // {
    //   $article = DB::table('article')->whereTitreAndContenu('Titre4','Contenu4')->get();
    //    dd($article);
    //     return view('base');
    // });


      //Sléectionner tous les article dont leur tire est titre4""
      //=========Deusiém méthéode de faire==============
    //   Route::get('/',function()
    //   {
    //     $article = DB::table('article')
    //     ->where('titre','Titre4')
    //     ->where('contenu','Contenu4')

    //     ->get();
    //      dd($article);
    //       return view('base');
    //   });


       //Sléectionner tous les article dont leur tire est titre4 ou le contenu  est le contenu""
    // //==========Premiéer méthéode de faire==============
    // Route::get('/',function()
    // {
    //   $article = DB::table('article')->whereTitreOrContenu('Titre4','Contenu4')->get();
    //    dd($article);
    //     return view('base');
    // });

        // //=========Deusiém méthéode de faire==============
        // Route::get('/',function()
        // {
        //   $article = DB::table('article')
        //   ->where('titre','Titre4')
        //   ->orwhere('contenu','Contenu4')

        //   ->get();
        //    dd($article);
        //     return view('base');
        // });

    // // Sléectionner  sur  les article deux articles"
    // //==========Premiéer méthéode de faire==============
    // Route::get('/',function()
    // {
    //   $article = DB::table('article')
    //   ->where('id','>=',2)
    //   ->take(3)
    //   ->get();
    //    dd($article);
    //     return view('base');
    // });


     // Sléectionner tous les articlee dans lorde ascendent coriosen & décroisent"
    // // //==========Premiéer méthéode de faire==============
    // Route::get('/',function()
    // {
    //   $article = DB::table('article')->orderBy('titre','asc')->get();
    //   $articl2 = DB::table('article')->orderBy('titre','desc')->get();
    //   dump($article);
    //   dd($articl2);
    //     return view('base');

    // });

    //    //==========méthéode de faire==============
    //    Route::get('/',function()
    //    {
    //      $article = DB::table('article')->orderBy('titre','desc')->get();
    //      dd($article);
    //        return view('base');

    //    });
    //Sélectionner toutes les articles dont lzur id >2
    //     Route::get('/',function()
    //    {
    //      $article = DB::table('article')->where('id', '>',2)->orderBy('titre','desc')->get();
    //      dd($article);
    //        return view('base');

    //    });

       //Afficher le nombre article
    //        Route::get('/',function()
    //    {
    //      $article = DB::table('article')->count();
    //      dd($article);
    //        return view('base');

    //    });

       //*****************2.Isersion********************** */
     //==========Premiéer méthéode de faire==============
    //   //Insertion deux articles
    //    Route::get('/',function()
    //    {
    //      $insert = DB::table('article')->insert(
    //  [
    //         [
    //            'titre'=>'Titre15',
    //            'contenu'=>'Contenu15',
    //            'etat'=>0,
    //            'date'=>date('Y-m-d H:i:s')

    //         ],
    //         [
    //             'titre'=>'Titre16',
    //             'contenu'=>'Contenu16',
    //             'etat'=>1,
    //             'date'=>date('Y-m-d H:i:s')
    //         ]
    // ],
    //      );
    //      dd($insert);
    //        return view('base');
    //    });


    //        //*****************2.Modification********************** */
    //   //Modifiér le Titre & le Conteun de  articles don l'id = 2
    //   Route::get('/',function()
    //   {
    //     $mod = DB::table('article')->whereId(2)->update(
    //        [
    //           'titre'=>'Titre2',
    //           'contenu'=>'Contenu2'
    //        ],
    //     );
    //     dd($mod);
    //       return view('base');
    //   });


    //        //*****************2.Supprésion********************** */
    //   //Modifiér le Titre & le Conteun de  articles don l'id = 2
    //   Route::get('/',function()
    //   {
    //     $sup = DB::table('article')->whereId(1)->delete( );
    //     dd($sup);
    //       return view('base');
    //   });



    //======================ELOQUENT(ORM)=========================
          //*****************1.Sélection********************** *//
          //Réquipere deux etudiants
    //  $etudiants = Etudiant::where('id', 1)->get();
    //  $etudiants = Etudiant::where('id', 1)->get();
    //   dd($etudiants);
    //   return view('base');

    //  //Réquipere  etudiants qui à l'id 2
    //  $etudiants = Etudiant::find(2);
    //  dd($etudiants);
    //  return view('base');

    //  //Réquipere le nom et le prénom de l'etudiant a l'id1
    // //  $etudiants = Etudiant::where('id', 1)->get();
    // $etudiants = Etudiant::whereId( 2)->get(['nom','prenom']);
    // dd($etudiants);
    // return view('base');
// Route::get('/' , function()
// {
//  //Réquipere le nom et le prénom de l'etudiant dont son prenom est different de "mastou" et son age > 13
//     $etudiants = Etudiant::where('prenom', '!=', 'Astou' )
//     ->where('age','>', 13)
//     ->get(['nom','prenom']);

//     dd($etudiants);

//     return view('base');
// });

// Route::get('/' , function()
// {
//  //Réquipere le nom et le prénom de la premiér l'etudiant
//     $nomPremieretudiants = Etudiant::first()->nom;

//     dd($nomPremieretudiants);

//     return view('base');
// });


          //*****************2.Ajouter un etudiante********************** *//
          //==============Premiér Méthode=============
        //   Route::get('/' , function()
        //   {
        //         $etudiant = new Etudiant();
        //         $etudiant->nom = "Fall";
        //         $etudiant->prenom = "Awa";
        //         $etudiant->matricule= "12A02F";
        //         $etudiant->age= 23;
        //         $ok= $etudiant->save();

        //       dd($ok);
        //       return view('base');
        //   });

            //  //==============Deusiém Méthode=============
            //  Route::get('/' , function()
            //  {
            //        $etudiant = new Etudiant(
            //         [
            //             'nom' => "Sarr",
            //             'prenom' => "Mame",
            //            'matricule'=> "17M02F",
            //             'age'=> 25,
            //         ]);
            //        $ok= $etudiant->save();

            //      dd($ok);
            //      return view('base');
            //  });


            //  //==============Triosiémém Méthode=============
            //  Route::get('/' , function()
            //  {
            //     $ok=  Etudiant::create(
            //         [
            //             'nom' => "Ndour",
            //             'prenom' => "Adame",
            //            'matricule'=> "145N02F",
            //             'age'=> 26,
            //         ]);


            //      dd("L'etudiant ".$ok->prenom. ' ' . $ok->nom. " Joudou na ci diame!!!");
            //      return view('base');
            //  });

          //*****************3.Supprimer un etudiante********************** *//
             //==============Deusiém Méthode=============
            //  Route::get('/' , function()
            //  {
            //     $ok=  Etudiant::where('id',8)->delete();


            //      dd($ok. " Supprimer  naniou ci diame!!!");
            //      return view('base');
            //  });
