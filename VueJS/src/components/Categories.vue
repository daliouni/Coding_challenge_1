<template>
  <div class="">
<v-select v-if="categories"  taggable multiple :value ="selected" @input="setSelected" label="branche" :options="categories"></v-select>
<button class="addButton" @click="save()"> speichern </button>
  </div>
</template>

<script>
export default {
   data () {
      return {
        categories:null,
        selected:null
      }
    },
    methods:{
      setSelected(selected){
       this.selected=selected
      },
      save(){
       this.$emit("save",this.selected)
      }

    },
  mounted(){
    const that = this
      this.$http.get("http://127.0.0.1:8000/categories")
      .then((result) => {
        that.categories=result.data
      })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.addButton {
  float:left;
  margin: 20px 0;
  padding: 10px; 
  background-color:#fff;
}
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
