<template>
    <div class="all-votes-container">
        <h2>Vote a {{title}}</h2>
        <div class="votees-container">
            <div class="votess-fake-container d-flex align-items-center justify-content-center">
                <div class="votee" :key="votee.id" v-for="votee in votees" v-on:click="voteeOnClick($event)">
                    <div class="overlay">
                        <h3 class="text-white">{{votee.name}}</h3>
                    </div>
                    <img :src="'images/'+votee.image" alt="">
                </div>
                <!-- <div class="votee">
                        <div class="overlay">
                        <h3 class="text-white">Alyssa Valdez</h3>
                        </div>
                    <img src="{{asset('images/vote2.jpg')}}" alt="">
                </div> -->
                <!-- <div class="votee">
                        <div class="overlay">
                        <h3 class="text-white">Anthony Cabigayan</h3>
                        </div>
                    <img src="{{asset('images/vote3.jpg')}}" alt="">
                </div> -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props:["title","votees"],
        data(){
            return {
              
            }
        },
        methods: {
            getSiblings(el) {
                var siblings = [];
                var sibling = el.parentNode.firstChild;

                while (sibling) {
                    if (sibling.nodeType === 1 && sibling !== el) {
                        siblings.push(sibling);
                    }
                    sibling = sibling.nextSibling
                }

                return siblings;
           },
           voteeOnClick(e){
               var siblings = this.getSiblings(e.target.parentNode);

               siblings.forEach(v=>{

                    v.style="width:0%";

                });

                setTimeout(function(){
                    e.target.parentNode.style="transform: rotate(0deg);width:100%;";
                    
                },1200);


           }
        }
    }
</script>

<style lang="scss" scoped>

</style>