<template>
    <div class="col-lg-4 col-md-6">
        <div class="card h-100">
            <div class="single-post post-style-1">
                <div class="blog-image"><img src="{{Storage::disk('local')->url($post->image)}}" alt="Blog Image"></div>

                <div class="blog-info">

                    <h4 class="title"><a href="{{ route('post',$post->slug) }}">
                        <b>{{ title }}</b></a> <br>
                    </h4>
                    <p class="align-text-bottom ">{{ subtitle }}</p>
                    <ul class="post-footer">
                        <li></li>
                        <li><a href="#" ><i class="ion-heart align-center"></i>57</a></li>
                        <li></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
