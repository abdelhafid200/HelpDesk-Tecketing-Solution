<div class="">


    @include('portail_client.header')

            <!-- Welcome -->

            <div class="welcome">
                <div>
                    <h1 class="titre_bienvenu">Bienvenue sur notre portail de help desk.</h1>
                    <h2 class="titre_bienvenu1">  Nous sommes là pour vous aider à résoudre tous vos problèmes et à répondre à toutes vos questions</h2>
                    <a href="{{url('/home')}}" class="button_bienvenu">obtenez une solution</a>
                </div>
            </div>

            <!-- la definition -->

        <div class="def">
            <div class="img_def">
                <img src="trouble-ticketing-system.png" alt="" class="img_def1">
            </div>
            <div class="txt_def">
                <h1>C'est quoi un help desk</h1>
                <p>
                    Un système de Help Desk est un logiciel qui permet à une entreprise de gérer les demandes
                    d'assistance de ses clients. Il s'agit d'une plate-forme qui aide les équipes de support
                    technique à répondre aux questions des clients, à résoudre les problèmes, à suivre les
                    problèmes ouverts et à communiquer avec les clients tout au long du processus.
                </p>
            </div>
        </div>
            <!-- équipe de travail -->
        <div class="equipe">

            <div class="equipe_img">
                <img src="equipe1.png" alt="" class="image_equipe">
            </div>
            <div class="equipe_travail">
                <h1>Equipe de travail</h1>
                <p>
                    <!-- L’équipe de travaille de travail est une équipe de techniciens ou agents qui sont responsables
                    s problèmes des clients les traitements de demandes.  -->
                    L'équipe de travail est constituée de techniciens ou d'agents responsables de la réesolution
                    des probl`emes et du traitement des demandes des clients. Les agents sont organisés en
                    groupes en fonction de différents crit`eres afin d'assurer une bonne répartition des tâches.
                    Cette organisation nous permet d'attribuer facilement des tickets et de créer des réponses
                    prédéfinies spécifiques.
                </p>
            </div>
        </div>
            <!-- le reste -->

        <!-- fin de reste 1 -->

            <div class="txts1">
                <div class="para1">
                    <img src="time.jpg" alt="" class="time">
                    <h3 class="horaire">Horaire de travail</h3>
                    <p class="txt_time1">
                        &nbsp; &nbsp; &nbsp;    L'horaire de travail est un outil essentiel pour le service d'assistance qui permet de mieux
                        contrôler les d'elais de résolution des tickets. Chaque horaire est identifié par un nom et
                        peut être accompagné d'une br`eve description.
                    </p>
                </div>
                <div class="para2">
                    <img src="helpticket.png" alt="" class="ticket">
                    <h3 class="ticket_reste">Ticket</h3>
                    <p class="txt_ticket1">
                        &nbsp; &nbsp; &nbsp;   Lorsqu'un client rencontre un probl`eme avec un produit ou un service, il peut contacter
                        le service d'assistance par divers canaux tels que le courriel, le portail du service ou le
                        téléphone. Chaque demande de client est attribuée `a un identifiant unique, communément
                        appelé "ticket".

                    </p>
                </div>
                <div class="para3">
                    <img src="base.jpg" alt="" class="book">
                    <h3 class="connaissance">Base de connaissance</h3>
                    <p class="txt_book1">
                        &nbsp; &nbsp; &nbsp;    Pour réduire la charge de travail des agents de support et améliorer la satisfaction des
                        clients, un centre d'assistance ou une base de connaissances peut permettre aux clients
                        d'accéder facilement aux informations et de résoudre les probl`emes sans avoir `a contacter
                        directement l'assistance, permettant ainsi une résolution rapide et précise.
                    </p>
                </div>
            </div>
        </div>

            <!-- les objet -->

        <div>
                <div class="principe_objet">
                    <h4>Les principaux objets</h4>
                    <!-- <hr style="width: 30; color: red; height :6px"> -->
                </div>
                <div class="objet">
                    <ul>
                        <li>Ticket : C'est l'objet principal dans un système de billetterie d'assistance. Chaque ticket représente une demande d'aide ou une question posée par un utilisateur.</li>
                        <li>Utilisateur : Il s'agit de l'objet qui représente les clients, les employés ou les membres de l'équipe qui utilisent le système de support.</li>
                        <li>Groupe : Les groupes sont souvent utilisés pour organiser les utilisateurs en fonction de leur rôle ou de leur département. Cela peut faciliter la distribution des tickets et la collaboration entre les membres de l'équipe.</li>
                        <li>Agent : Les agents sont les personnes qui traitent les tickets et fournissent une assistance aux utilisateurs. Ils peuvent appartenir à différents groupes et avoir des rôles différents.</li>
                        <li>Priorité : Les priorités sont utilisées pour classer les tickets en fonction de leur gravité. Cela permet aux agents de traiter les tickets les plus urgents en premier.</li>
                        <li>Statut : Les différents statuts d'un ticket indiquent où il en est dans le processus de traitement. Par exemple, un ticket peut être en attente, en cours de traitement ou résolu.</li>
                        <li>Commentaire : Les commentaires sont utilisés pour ajouter des notes à un ticket et pour communiquer avec l'utilisateur ou les autres membres de l'équipe.</li>
                    </ul>
                </div>
        </div>

        <div>
            <div class="principe_objectif">
                <h4>Les Objectifs</h4>
            </div>
            <div>
                <ul class="objectif">
                    <li>Améliorer la qualité du support en fournissant un moyen structuré pour gérer les demandes des clients.</li>
                    <li>Assurer la traçabilité et la responsabilité pour chaque demande de support technique.</li>
                    <li>Réduire le temps de réponse en routant les demandes aux membres de l'équipe appropriés et en priorisant les demandes en fonction de leur impact sur l'entreprise.</li>
                    <li>Fournir des données utiles sur la performance de l'équipe de support technique pour permettre une amélioration continue.</li>
                    <li>Améliorer l'expérience client en fournissant une interface facile à utiliser pour soumettre et suivre les demandes de support technique.</li>
                </ul>
            </div>
        </div>

@include('portail_client.footer')


