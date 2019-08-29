<template>
    <div>
        <h2 class="text-center">Captura tus ideas</h2>
        <div class="well">
            <h4>¿En qué estás pensando?</h4>
            <form v-on:submit.prevent="createIdea">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" maxlength="256" v-model="newIdea">
                    <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm">
                            Agregar
                        </button>
                    </span>
                </div>
            </form>
            <hr>
            <ul class="list-unstyled">
                <li v-for="idea in ideas" :key="idea.description">
                    <p>
                        <small class="text-muted">
                            <em>{{ since(idea.created_at) }}</em>
                        </small>
                        {{ idea.description }}
                    </p>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    // Por si instalas la librería sin usar npm, acá lo debes importar si solo se va a usar en este componente, 
        // si se requieren en otros componentes deben importarse desde resources/assets/js/app.js
    import axios from 'axios'
    import toastr from 'toastr'
    import moment from 'moment' /* No olvidar importar los estilos en sass/app.scss */

    // moment.lang('es'); /* Para cambiar el lenguaje de Momentjs */ /* Esta fucnión está desactualizada y no se recomienda usar aunque funciona */
    moment.locale('es'); /* Para cambiar el lenguaje de Momentjs */ /* Funciona y es la recomendada */

    export default {
        data() {
            return {
                ideas: [],
                newIdea: ''
            }
        },

        created: function(){
            this.getIdeas();
        },

        methods: {
            // Función para tranformar la variable al formato con Momentjs
            since: function(date)
            {
                return moment(date).fromNow();
            },
            getIdeas:function() 
            {
                var urlIdeas = "mis-ideas";
                axios.get(urlIdeas).then(response => {
                    this.ideas = response.data;
                })
            },
            createIdea: function()
            {
                var url = 'guardar-idea';
                axios.post(url, {
                    description: this.newIdea
                }).then(response => {
                    this.getIdeas(); /* Se obtienen todas las ideas */
                    this.newIdea = ''; /* Se limpia la caja de texto newIdea */
                    // Toastr
                    toastr.success('Nueva idea registrada');
                }).catch(error => {
                    // Toastr
                    toastr.error('Error');
                });
            }
        }
    }
</script>

