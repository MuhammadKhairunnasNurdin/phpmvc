<div class="container mt-4">
	<table class="table table-secondary">
		<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">NIM</th>
			<th scope="col">Nama</th>
			<th scope="col">Alamat</th>
		</tr>
		</thead>
		<tbody>

		<?php
		$conn = mysqli_connect('localhost', 'root', '', 'projek');
		if (mysqli_connect_errno()) {
			die("Koneksi database gagal: " . mysqli_connect_error());
		}
		$query = "SELECT * FROM Mahasiswa";
		$result = mysqli_query($conn, $query);
		?>

		<?php
		$no = 1;
		while ($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<th scope="col">
					<?php echo $no++; ?>
				</th>
				<td>
					<?php echo $row['NIM']; ?>
				</td>
				<td>
					<?php echo $row['nama']; ?>
				</td>
				<td>
					<?php echo $row['alamat']; ?>
				</td>
			</tr>
		<?php } ?>

		<!-- <?php
		$no = 1;
		foreach ($data['mhs'] as $mhs): ?>
                <tr>
                    <th scope="col">
                        <?php echo $no++; ?>
                    </th>
                    <td>
                        <?php echo $mhs['NIM']; ?>
                    </td>
                    <td>
                        <?php echo $mhs['nama']; ?>
                    </td>
                    <td>
                        <?php echo $mhs['alamat']; ?>
                    </td>
                </tr>
            <?php endforeach; ?> -->
		</tbody>
	</table>
</div>