<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>this is index page</title>
  <style>
    table, tr, th, td {
      border: 1px solid teal;
      border-collapse: collapse;
    }
    td, th {
      padding: 10px;
    }
    tr:nth-child(odd) {
      background: tomato;
      color: white;
    }
  </style>
</head>
<body>
 <h1>this is index page</h1> 
 <ul>
   <?php foreach($fruits as $fruit): ?>
    <li><?php echo $fruit; ?></li>
   <?php endforeach; ?>
 </ul>

 <h2>All teachers form feni college</h2>
 <table>
   <tr>
     <th>Name</th>
     <th>Email</th>
   </tr>
   <?php foreach($teachers as $teacher): ?>
    <tr>
      <td><?php echo $teacher->name; ?></td>
      <td><?php echo $teacher->email; ?></td>
    </tr>
   <?php endforeach; ?>
 </table>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>