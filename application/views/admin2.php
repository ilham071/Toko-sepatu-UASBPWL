
                                <?php
                                
                                    foreach($dataorder as $b){
                                ?>
                                <tr>
                                    <td><?php echo $b ['no'] ?></td>
                                    <td><?php echo $b ['merek'] ?></td>
                                    <td><?php echo $b ['ukuran'] ?></td>
                                    <td><?php echo $b ['alamat'] ?></td>
                                    <td>
                                    <a href="<?php echo base_url('index.php/welcome/editorder?id=');?><?php echo $b ['no'] ?>" class="btn btn-primary btn-lg btn-block ">Edit</a>
                                    <a href="<?php echo base_url('index.php/welcome/deleteorder?id=');?><?php echo $b['no'] ?>" class="btn btn-success btn-lg btn-block mt-2r">Hapus/<br>Selesai</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js');?>"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/js/custom.js');?>"></script>


</body>
</html>