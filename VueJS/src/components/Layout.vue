<template>
<!-- Main Layout of the App !-->
  <div>

  <div class="wrap">
  <p>Zugewiesene Branchen</p>
  </div>
  <div class="wrap">
  
<!-- Categories Component !-->
<div class="searchBar">
<Categories @save="getCategories($event)"></Categories>
</div>
</div>

<!-- DataTable Component !-->
<div   class="wrap">
  <div class="dataTable big">
   <DataTable :categories="selected"></DataTable>
  </div>
 
</div>


  </div>
</template>

<script>
import Categories from '@/components/Categories.vue'
import DataTable from '@/components/DataTable.vue'

export default {
  props: {
    selected:null
  },
    components: {
    Categories ,
    DataTable
  },
  methods:{
    getCategories(selected){
      this.selected = selected
    }
  }
}
</script>

<style scoped>

ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}


.searchBar {
  width: 100%;
  background: #eee;
  margin-bottom: 20px;
}


.wrap {
  width: 100%;
}

.dataTable {
  float: left;
  margin-right: 10px;
}

.big {
  width: 100%;
  height: 200px;
}



.margin-bottom {
  margin-bottom: 20px;
}
</style>
