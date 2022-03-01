<h1>API description</h1>

<h2>Students</h2>
<h3>Show all students</h3>
<p>api path = /api/students</p>
<p>method = get</p>

<h3>Create student</h3>
<p>api path = /api/students</p>
<p>type = json</p>
<p>method = post</p>
<p>example:</p>
{
    "firstname": "Dimon", // required
    "email": "asd.pollich@yahoo.com", // required, unique
    "group_id": 1 // nullable
}

<h3>Show student info</h3>
<p>api path = /api/students/$id</p>
<p>method = get</p>

<h3>Update student</h3>
<p>api path = /api/students/$id</p>
<p>type = json</p>
<p>method = put</p>
<p>example:</p>
{
    "firstname": "Dimon", // required
    "email": "asd.pollich@yahoo.com", // required, unique
    "group_id": 1 // nullable
}

<h3>Delete student</h3>
<p>api path = /api/students/$id</p>
<p>method = delete</p>

<h2>Classes (groups)</h2>

<h3>Show all classes</h3>
<p>api path = /api/groups</p>
<p>method = get</p>

<h3>Create class</h3>
<p>api path = /api/groups</p>
<p>type = json</p>
<p>method = post</p>
<p>example:</p>
{
    "title": "temporibus" // required, unique
}

<h3>Delete class</h3>
<p>api path = /api/groups/$id</p>
<p>method = delete</p>

<h3>Get info about plan</h3>
<p>api path = /api/groups/$id/plan</p>
<p>method = get</p>

<h2>Lectures</h2>
<h3>Show all lectures</h3>
<p>api path = /api/lectures</p>
<p>method = get</p>

<h3>Show lecture info</h3>
<p>api path = /api/lectures/$id</p>
<p>method = get</p>

<h3>Create lecture</h3>
<p>api path = /api/lectures</p>
<p>type = json</p>
<p>method = post</p>
<p>example:</p>
{
    "theme": "Optio totam sapiente ut.", //required, unique
    "descr": "Inventore fugiat facilis molestias omnis quis. Ipsum libero reprehenderit harum voluptatum consequuntur dolorum atque recusandae." // required
}

<h3>Update lecture</h3>
<p>api path = /api/lectures/$id</p>
<p>type = json</p>
<p>method = put</p>
<p>example:</p>
{
    "theme": "Optio totam sapiente ut.", //required, unique
    "descr": "Inventore fugiat facilis molestias omnis quis. Ipsum libero reprehenderit harum voluptatum consequuntur dolorum atque recusandae." // required
}

<h3>Delete lecture</h3>
<p>api path = /api/lectures/$id</p>
<p>method = delete</p>

<h2>Plans</h2>
<h3>Show all plans</h3>
<p>api path = /api/plans</p>
<p>method = get</p>

<h3>Create plan</h3>
<p>api path = /api/plans</p>
<p>type = json</p>
<p>method = post</p>
<p>attr lectures = "lecture_id" => "sort"</p>
<p>example:</p>
{
    "lectures": "{\"1\":\"100\",\"2\":\"400\",\"3\":\"300\",\"4\":\"200\",\"5\":\"500\",\"6\":\"800\",\"7\":\"600\",\"8\":\"700\",\"9\":\"900\",\"10\":\"1000\"}", // required
    "group_id": 2 // required
}

<h3>Update plan</h3>
<p>api path = /api/plans/$id</p>
<p>type = json</p>
<p>method = put</p>
<p>example:</p>
{
    "lectures": "{\"1\":\"100\",\"2\":\"400\",\"3\":\"300\",\"4\":\"200\",\"5\":\"500\",\"6\":\"800\",\"7\":\"600\",\"8\":\"700\",\"9\":\"900\",\"10\":\"1000\"}", // required
    "group_id": 2 // required
}
