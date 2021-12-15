<template>
    <div class="row" style="padding-bottom: 15px; font-family: 'Times New Roman', Times, serif;">
        <div class="col-md-6">
            <a href="slug"><img src="{{ Storage::disk('local')->url(image) }}" alt="Another Picture" class="img-fluid"></a>
        </div>
        <div class="col-md-6" style="height: 300px; overflow: hidden">
            <div class="full blog_cont">
                <a href="slug"><h4>{{ title }}</h4></a>
                <a href="slug"><h4>{{ subtitle }}</h4></a>
                <h5>Posted by <a href="">Lone Wolf</a>
                        at {{ created_at }}
                        <a href="" class="like">
                        <small style="font-size: 17px">0</small>
                        <i class="fab fa-gratipay"></i>
                    </a>
                        <a href="" class="dislike">
                        <small style="font-size: 17px">0</small>
                        <i class="fas fa-heart-broken"></i>
                    </a>

                </h5>
                <p>{!! htmlspecialchars_decode(body) !!}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Compoment mounted.')
        }
        /*
        data(){
            return {
                likeCount:0
            }
        },
        */
        props:[
            'title','subtitle','created_at','postId','login','likes','slug'
        ],
        /*
        created(){
            this.likeCount = this.likes
        },
        methods:{
            likeIt(){
                if (this.login) {
                    axios.post('/saveLike',{
                        id : this.postId
                    })
                      .then(response => {
                        if (response.data == 'deleted') {
                            this.likeCount -= 1;
                        }else{
                            this.likeCount += 1;
                        }
                        // this.blog = response.data.data
                        // console.log(response);
                      })
                      .catch(function (error) {
                        console.log(error);
                      });
                }else{
                    window.location = 'login'
                }
            }
        }
        */
    }
</script>
