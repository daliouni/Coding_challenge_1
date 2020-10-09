<template>
  <div class="">
<table>
  <thead>
    <tr>
      <th scope="col">branche</th>
      <th scope="col">unbearbeitet</th>
      <th scope="col">GF fehlt</th>
      <th scope="col">nicht erreicht</th>
      <th scope="col">wiedervorlage</th>
      <th scope="col">kein interesse</th>
      <th scope="col">zu viele versuche</th>
      <th scope="col">termine</th>
      <th scope="col">kunden</th>
      <th scope="col">blacklist</th>
      <th scope="col">insgesamt</th>

    </tr>
  </thead>
  <tbody>
<!-- Looping over Categories !-->
    <tr v-for="category in categories" :key="category.id">
      <td data-label="branche"> <b>{{category.branche}}</b></td>
      <td data-label="unbearbeitet">{{category.unbearbeitet}}</td>
      <td data-label="gf">{{category.gf}}</td>
      <td data-label="nitch">{{category.nicht}}</td>
      <td data-label="wiedervorlage">{{category.wiedervorlage}}</td>
      <td data-label="kein"> {{category.kein}} </td>
      <td data-label="zu">{{category.zu}}</td>
      <td data-label="termine">{{category.termine}}</td>
      <td data-label="kunden">{{category.kunden}}</td>
      <td data-label="blacklist">{{category.blacklist}}</td>
      <td data-label="insgesamt">{{sum(category)}}</td>
    </tr>

    <tr
    v-if="categories && categories.length > 0"
     style="background-color:black; color:white;">
      <td >  </td>
      <td>{{total("unbearbeitet")}}</td>
      <td >{{total("gf")}}</td>
      <td >{{total("nicht")}}</td>
      <td >{{total("wiedervorlage")}}</td>
      <td >{{total("kein")}}</td>
      <td >{{total("zu")}}</td>
      <td >{{total("termine")}}</td>
      <td >{{total("kunden")}}</td>
      <td >{{total("blacklist")}}</td>
      <td>{{totalAll()}}</td>
    </tr>
  
  </tbody>
</table>
  </div>
</template>

<script>

export default {
  props: ["categories"],
   data () {
      return {
       
      }
    },
    methods :{
      total(name) {
var total = 0
this.categories.forEach(category => 
{
total+= category[name]
})
return total
      },
      sum(category) {
        return category.unbearbeitet + category.gf + category.nicht + category.wiedervorlage + category.kein + category.zu + category.termine + category.kunden + category.blacklist
      },
      totalAll() {
        const that = this;
var total = 0
this.categories.forEach(category => 
{
total+= that.sum(category)
})
return total
      }
    },
    mounted(){
    
    }
   
 
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}
th {
  background-color:black;
  color:white;
  margin-right:20px !important;
}
table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: 1em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .5em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

</style>
