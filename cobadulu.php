                            <!--Query dari chatgpt untuk edit data-->
                            <?php
                            include '../koneksi.php';

                            if (isset($_GET['id_wisata'])) {
                                $id = $_GET['id_wisata'];

                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    $id = $_POST["id_wisata"];
                                    $nama = $_POST["nama_wisata"];
                                    $alamat = $_POST["alamat"];
                                    $deskripsi = $_POST["deskripsi"];
                                    $latitude = $_POST["latitude"];
                                    $longitude = $_POST["longitude"];

                                    $sql = "UPDATE wisata SET nama_wisata='$nama', email='$email', alamat='$alamat', deskripsi='$deskripsi', latitude='$latitude', longitude='$longitude' WHERE id_wisata=$id";
                                    if ($koneksi->query($sql) === TRUE) {
                                        header("Location: tampil_data.php");
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $koneksi->error;
                                    }
                                } else {
                                    $sql = "SELECT * FROM wisata WHERE id_wisata=$id";
                                    $result = $koneksi->query($sql);
                                    $data = $result->fetch_assoc();
                                }

                                $koneksi->close();
                            }
                            ?>