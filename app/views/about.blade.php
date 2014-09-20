@extends('layout')

@section('container')
<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        A propos de
                        <strong>Moi</strong>
                    </h2>
                    <hr>
                    <div id="self-image" class="pull-left">
                        <img class="img-thumbnail" src="dist/img/slide-1.jpg" alt="" width="300">
                    </div>
                    <p>Je m'appelle {{ Config::get('personal.name', 'John Doe') }}, je travaille actuellement chez Vivializ sur Dakar (Sénégal) en tant que développeur web et mobile. Passionné par l'informatique et les nouvelles technologies, je m'intéresse fortement à l'entrepreunariat et aux environnements startups.</p>
                    <p>Je crois énormément en la philosophie Unix et Open Source. J'aime qu'une application soit simple et rapide en plus d'apporter une forte valeur ajoutée à ses utilisateurs. J'apprécie également de concevoir un programme en utilisant une méthodologie agile avec une approche centrée sur l'utilisateur (user-centered design). </p>
                    <p>
                        Pour moi, la qualité d'une application ne s'arrête pas à son ergonomie mais concerne également la partie technique du produit. Pour cela, j'essaie au quotidien de mettre en oeuvre les dernières évolutions en matière de développement. Une veille technologique effectuée quotidiennement me permet de maintenir mes connaissances à jour et d'être force de proposition concernant les projets sur lesquels je suis amené à travailler.
                    </p>

                    <p>
                         En dehors des mes activités informatiques, je suis un grand fan de sports.
                    </p>

                    <p>
                        Pour me contacter, n'hésitez pas à m'envoyer un tweet ou à me contacter par email quand vous le souhaitez. Vous pouvez également me retrouver sur les réseaux sociaux tels que <a href="#">Github</a>, <a href="#">LinkedIn</a>.
                    </p>
                </div>
            </div>
        </div>
@stop
