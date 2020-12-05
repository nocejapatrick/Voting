<template>
    <div class="col-md-12">
        
        <voteescontainercomponent :key="position.id" v-for="position in positions" :title="position.title" :votees="position.votees"></voteescontainercomponent>


    </div>
</template>

<script>
    export default {
        data() {
            return {
                positions: [
                    {
                        title:"President",
                        votees:[
                            {
                                id:1,
                                name:"Patrick Noceja!!!",
                                image:'vote1.jpg'
                            },
                            {
                                id:2,
                                name:"Alyssa Valdez",
                                image:'vote2.jpg'  
                            },
                            {
                                id:3,
                                name:"Anthony Cabigayan",
                                image:'vote3.jpg'  
                            },
                            {
                                id:4,
                                name:"Anthony Cabigayan",
                                image:'vote3.jpg'  
                            }
                        ]
                    },
                    {
                        title:"Vice-President",
                        votees:[
                            {
                                id:1,
                                name:"Patrick Noceja",
                                image:'vote1.jpg'
                            },
                            {
                                id:2,
                                name:"Alyssa Valdez",
                                image:'vote2.jpg'  
                            },
                            {
                                id:3,
                                name:"Anthony Cabigayan",
                                image:'vote3.jpg'  
                            }
                        ]
                    },
                      {
                        title:"Secretary",
                        votees:[
                            {
                                id:1,
                                name:"Patrick Noceja",
                                image:'vote1.jpg'
                            },
                            {
                                id:2,
                                name:"Alyssa Valdez",
                                image:'vote2.jpg'  
                            },
                            {
                                id:3,
                                name:"Anthony Cabigayan",
                                image:'vote3.jpg'  
                            }
                        ]
                    }
                ]
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>