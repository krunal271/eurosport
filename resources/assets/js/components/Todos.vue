<template>
    <div class="row">
        <div class="todo-container col-lg-6 col-lg-offset-3">
            <h5 class="todo-title">TODOS APP</h5>
            <p class="text-xs-center">This Demo showcases a simple workflow with VueJS , Vue Resource and Laravel. </p>
            <input type="text" class="form-control todo-field" v-model="newTodo.title" placeholder="New Todo" v-on:keyup.enter="addTodo">
            <div class="todo-block scroll-pane">
                <ul class="todo-list" v-show="todos.length">
                    <li v-for="(todo,index) in todos">
                        <input type="checkbox" class="toggle" :id="index" v-bind:true-value="1" v-bind:false-value="0" v-model="todo.completed" v-on:change="toggleTodoComplete(todo)">
                        <label :for="index">{{todo.title}}</label>
                        <a href="#" class="remove-link" v-on:click.prevent="removeTodo(todo)"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted : function(){
            this.todos = JSON.parse(this.yourTodos);
        },
        data : function(){
            return {
                newTodo : {
                    id : '',
                    title : '',
                    completed : false
                },
                todos : [
                    {
                        title : 'Install the Template',
                        completed : false
                    }
                ]
            }
        },
        props: ['yourTodos'],
        methods : {
            addTodo : function(){
                var vm = this,url = '/admin/todos';

                this.$http.post(url, vm.newTodo).then(function(request){
                    //toastr['success'](request.data, "Success");

                    vm.todos.push({
                        id : request.data.todo.id,
                        title : request.data.todo.title,
                        completed : false
                    });

                    vm.newTodo =  {
                        id : '',
                        title : '',
                        completed : false
                    }

                }, function(error){
                    alert('error');
                });

            },
            removeTodo : function(todo){

                var url = '/admin/todos/'+ todo.id,vm = this;

                vm.$http.post(url, {_method : 'DELETE'}).then(function(request){
                    var index = vm.todos.indexOf(todo)
                    vm.todos.splice(index, 1)
                }.bind(this), function(error){
                });

            },
            toggleTodoComplete : function(todo){

                var url = '/admin/todos/toggleTodo/' + todo.id , vm = this;

                vm.$http.post(url, {completed : todo.completed}).then(function(request){
                }.bind(this), function(error){
                });

            }
        }
    }
</script>

<style>
    .todo-container{
        background-color: #FFDE00;
        padding:40px;
        min-height: 400px;
    }

    .todo-field:focus{
        border:1px solid #ccc;
    }

    .todo-title{
        font-family: "Roboto",sans-serif;
        font-weight: lighter;
        text-align: center;
    }

    .todo-block h6{
        text-align: center;
        text-transform: uppercase;
        color: gray;
    }

    .remove-link {
        color: #f35a3d;
        position: absolute;
        top:0;
        line-height: 50px;
        right:5px;
    }

    .remove-link:hover{
        color: #f35a3d;
    }


    .todo-block{
        background: #fff;
        padding: 0.375rem 0.75rem;
        margin-top:30px;
        height: 200px;
        overflow: auto;
    }

    .todo-list {
        list-style: none;
        padding:0;
        font-size:20px;
    }

    .todo-list li{
        border-bottom: 1px solid #d9d9d9;
        padding:10px;
        position:relative;
    }

    .todo-list li label{
        padding-left:70px;
        margin:0;
        color : #333;
    }

    .todo-list li input[type=checkbox]{
        outline: none;
        text-align: center;
        width: 40px;
        height:40px;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto 0;
        border: none;
        -webkit-appearance: none;
        appearance: none;
    }

    .todo-list li .toggle:after {
        content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="-10 -18 100 135"><circle cx="50" cy="50" r="50" fill="none" stroke="#333" stroke-width="3"/></svg>');
    }

    .todo-list li .toggle:checked:after {
        content: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="-10 -18 100 135"><circle cx="50" cy="50" r="50" fill="none" stroke="#333" stroke-width="3"/><path fill="#4fc47f" d="M72 25L42 71 27 56l-4 4 20 20 34-52z"/></svg>');
    }

    @media (max-width: 768px) {
        .todos-container{
            display: none;
        }
    }
</style>

