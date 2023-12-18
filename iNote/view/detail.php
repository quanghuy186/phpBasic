<style>
table {
    border-collapse: collapse;
    width: 80%;
    margin: auto;
}

th,
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f2f2f2;
}
</style>

<table>
    <h1 class="text-center pt-3">Xem chi tiết</h1>

    <thead>
        <tr>
            <th>STT</th>
            <th>Tiêu đề</th>
            <th>Thể loại</th>
            <th>Nội dung</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td><?php echo $note->id ?></td>
            <td><?php echo $note->title ?></td>
            <td><?php echo $note->name ?></td>
            <td><?php echo $note->content ?></td>
        </tr>
    </tbody>

</table>

<div class="btn btn-warning mt-3" style="margin-left: 10%;">
    <a class="text-white text-decoration-none" href="index.php?">Quay lại</a>
</div>