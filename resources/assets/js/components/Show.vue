<template>

    <div class="container " id="app" >
        <div class="row">
            <div class="col-md-12" >
                <h1>@{{message}}</h1>

                <div class="card bg-primary mb-2 panel panel-primary card-img-top" >
                    <div class="card-header panel-heading">
                        <div class="card-body row">
                            <div class="col-md-10"><h3 class="panel-title">Experience</h3></div>
                            <div class="col-md-2 text-right">
                                <button class="btn btn-success" @click="open=true">Ajouter</button>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body card text-white ">

                        <div v-if="open" >

                            <div class="from-group">
                                <label for="">Titre</label>
                                <input type="text" class="form-control" placeholder="le Titre" v-model="experience.titre">
                            </div>
                        </div>

                        <div >
                            <div class="from-group">
                                <label for="">Body</label>
                                <textarea  class="form-control" placeholder="le Contenu"  v-model="experience.body">
                                </textarea>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date Debut</label>
                                        <input type="date" class="form-control" placeholder="Debut" v-model="experience.debut">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date Fin</label>
                                        <input type="date" class="form-control" placeholder="fin" v-model="experience.fin">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="btn btn-info btn-block" @click="addExperience">Ajouter</button>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item" v-for="experience. in experiences">
                                <div class="pull-right">
                                    <button class="btn btn-warning btn-sm">Editer</button>

                                </div>
                                <h3>@{{ experience.titre }}</h3>
                                <p>@{{ experience.body }}</p>
                                <small>@{{ experience.debut }} - @{{experience.fin}}</small>
                            </li>



                        </ul>

                    </div>

                </div>

                <hr>






                <div class="card bg-primary mb-3 panel panel-primary card-img-top" >
                    <div class="card-header panel-heading">
                        <div class="card-body row">
                            <div class="col-md-10"><h3 class="panel-title">Formation</h3></div>
                            <div class="col-md-2 text-right">
                                <button class="btn btn-success" @click="open = true ">Ajouter</button>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body card text-white ">

                        <div >
                            <div class="from-group">
                                <label for="">Titre</label>
                                <input type="text" class="form-control" placeholder="le Titre">
                            </div>
                        </div>

                        <div >
                            <div class="from-group">
                                <label for="">Body</label>
                                <textarea  class="form-control" placeholder="le Contenu" >
                                </textarea>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date Debut</label>
                                        <input type="date" class="form-control" placeholder="Debut">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date Fin</label>
                                        <input type="date" class="form-control" placeholder="fin">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>



                <div class="card bg-primary mb-3 panel panel-primary card-img-top" >
                    <div class="card-header panel-heading">
                        <div class="card-body row">
                            <div class="col-md-10"><h3 class="panel-title">Porte-folio</h3></div>
                            <div class="col-md-2 text-right">
                                <button class="btn btn-success" @click="open = true ">Ajouter</button>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body card text-white ">

                        <div  >
                            <div class="from-group">
                                <label for="">Titre</label>
                                <input type="text" class="form-control" placeholder="le Titre">
                            </div>
                        </div>

                        <div >
                            <div class="from-group">
                                <label for="">Body</label>
                                <textarea  class="form-control" placeholder="le Contenu" >
                                </textarea>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="">Date Debut</label>
                                        <input type="date" class="form-control" placeholder="Debut">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="">Date Fin</label>
                                        <input type="date" class="form-control" placeholder="fin">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <hr>






                <div class="card bg-primary mb-3 panel panel-primary card-img-top" >
                    <div class="card-header panel-heading">
                        <div class="card-body row">
                            <div class="col-md-10"><h3 class="panel-title">Competence</h3></div>
                            <div class="col-md-2 text-right">
                                <button class="btn btn-success" @click="open = true ">Ajouter</button>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body card text-white ">

                        <div  >
                            <div class="from-group">
                                <label for="">Titre</label>
                                <input type="text" class="form-control" placeholder="le Titre">
                            </div>
                        </div>

                        <div >
                            <div class="from-group">
                                <label for="">Body</label>
                                <textarea  class="form-control" placeholder="le Contenu" >
                                </textarea>
                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="">Date Debut</label>
                                        <input type="date" class="form-control" placeholder="Debut">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control">
                                        <label for="">Date Fin</label>
                                        <input type="date" class="form-control" placeholder="fin">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



</div>
        </div>
    </div>
</template>






<script>
    export default {
        data: {
            message: 'je suis ala',
            experiences: [],
            open: false,
            experience: {
                id: 0,
                cv_id: window.laravel.idExperience,
                titre: '',
                body: '',
                debut: '',
                fin: ''

            }
        },
        methods: {
            getExperiences: function () {
                axios.get(window.laravel.url + '/getexperiences/' + window.laravel.idExperience)
                    .then(response => {
                    console.log('susses : ', response.data);
                this.experience = response.data;
            })
            .
                catch(error => {
                    console.log('errors :', error);
            })
            },
            addExperience: function () {
                axios.post(window.laravel.url + '/addexperience', this.experience)
                    .then(reponse => {
                    if(response.data.etat)
                {
                    this.open = false;
                    this.experiences.unshift(this.experience);
                    this.experience = {
                        id: 0,
                        cv_id: window.laravel.idExperience,
                        titre: '',
                        body: '',
                        debut: '',
                        fin: ''
                    };

                }
            })

                .catch(error => {console.log(error)})

            }


        },

        created: function () {
            this.getExperiences();
        }


    });

</script>

<style scoped>

</style>