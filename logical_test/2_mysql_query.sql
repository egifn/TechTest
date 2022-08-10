SELECT * FROM tb_mahasiswa AS a INNER JOIN tb_mahasiswa_nilai AS b
ON a.mhs_id = b.mhs_id INNER JOIN tb_matakuliah AS c ON b.mk_id = c.mk_id
WHERE c.mk_kode = 'MK303';