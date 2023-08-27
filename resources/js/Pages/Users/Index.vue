


  <template>
    <div>
        <table id="usersTable">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="user in users" :key="user.id">
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  
 
  
  export default {
    setup() {
      const { users } = usePage().props;
  
      return {
        users,
      };
    },
    mounted() {
      $(this.$el.querySelector('#usersTable')).DataTable();
    },
    beforeDestroy() {
      $(this.$el.querySelector('#usersTable')).DataTable().destroy();
    },
  };
  </script>
  
  <style>
  
  @import 'https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css';
  </style>
  