<style>
    .sidebar {
  background-color: #f4f4f4;
  width: 200px;
  padding: 20px;
  box-sizing: border-box;
}

.sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.sidebar li {
  margin-bottom: 10px;
}

.sidebar a {
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  color: #333;
}

.sidebar a:hover {
  background-color: #ddd;
}

</style>
<div class="sidebar">
    <ul>
      <li><a href="{{ route('admin.products') }}">Products</a></li>
      <li><a href="{{ route('admin.categories') }}">Categories</a></li>
      <li><a href="{{ route('admin.home.slider') }}">Manage Sliders</a></li>
    </ul>
  </div>
  