<template>
<div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid">
                <div class="p-6">
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            {{ joke.joke }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-4 sm:items-center sm:justify-center">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center">
                    <button @click="showJoke()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Get Joke</button>
                </div>
            </div>

        </div>
</div>
</template>
<script>
import axios from 'axios';
    export default {
    props: ['joke'],
        methods:{
            showJoke(){
            const vm = this;
            axios.post('/getjoke')
            .then(function (response) {  
             vm.joke = response.data.joke;  
             })  
            .catch(function (error) {
                console.log(error)
            });
        },
        }
    }
</script>
