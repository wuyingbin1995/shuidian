$(function(){

        /*新建用户信息*/
        var addrow = $('#demo-foo-addrow');
        //点击提交
        $('.demo-btn-addrow').click(function(){
            //获取属性值
            var AddTrIndexUserTd0 = $("#AddTrIndexUserTd0").val();
            var AddTrIndexUserTd1 = $("#AddTrIndexUserTd1").val();
            var AddTrIndexUserTd2 = $("#AddTrIndexUserTd2").val();
            var AddTrIndexUserTd3 = $("#AddTrIndexUserTd3").val();
            var AddTrIndexUserTd4 = $("#AddTrIndexUserTd4").val();
            var AddTrIndexUserTd5 = $("#AddTrIndexUserTd5").val();
            // var footable = addrow.data('footable');
            // var newRow = "<tr><td>"+AddTrIndexUserTd0+"</td><td>"+AddTrIndexUserTd1+"</td><td>"+AddTrIndexUserTd2+"</td><td>"+AddTrIndexUserTd3+"</td><td>"+AddTrIndexUserTd4+"</td><td><span class='label label-table label-success'>"+AddTrIndexUserTd5+"</span></td><td><button class='demo-modify-row btn btn-success btn-xs' data-toggle='modal' data-target='#myModal'>修改</button>&nbsp;<button class='demo-delete-row btn btn-danger btn-xs'>删除</button></td></tr>";
            //footable.appendRow(newRow);

            var id      = AddTrIndexUserTd1;
            var pid     = AddTrIndexUserTd2;
            var auth_c  = AddTrIndexUserTd3;
            var auth_a  = AddTrIndexUserTd4;
            var is_nav  = AddTrIndexUserTd5;
             //组装要发送的数据
            var data = {
                'auth_name' : id,
                 'pid'      : pid,
                'auth_c'    : auth_c,
                'auth_a'    : auth_a,
                'is_nav'    : is_nav
            };
            // console.log(data);
            // return;

            //发送ajax添加请求
            $.ajax({
                'url'   : '__CONTROLLER__/auth_add',
                'type'  : 'post',
                'data'  : data,
                'dataType' : 'json',
                'success' : function(response){

                    if(response.code != 10000){
                        //添加失败
                        alert(response.msg);
                        return;
                    }else{
                        //添加成功
                        window.location.reload();
                    }
                }
            });
        });

        //修改数据
        $(".demo-modify-row").click(function(){

            /*弹出页面显示输入框*/
            $('#myInput').focus();

            /*获取到你点击那一行的下标*/
            var TrIndex = $(this).parent().parent().index();

            /*获取到你点击的那一行里面的内容*/
            var TrIndexUser = $(".tbodyTr tr:eq("+TrIndex+") td:eq(0)").text();
            $("#myModalLabel").html("正在操作的用户编号为 : "+TrIndexUser);
            
            //获取ID
            var id = TrIndexUser;

            //组装要发送的数据
            var data = {'id':id};

            //发送ajax请求
             $.ajax({
                    'url':'__CONTROLLER__/auth_list',
                    'type':'post',
                    'data':data,
                    'dataType':'json',
                    'success':function(response){
                        //console.log(response);
                        if(response.code != 10000){
                            //判断返回结果中的code ，不是10000都代表失败，提示错误信息
                            alert(response.msg);
                            return;
                        }else{
                            //修改成功
                            //将获取到内容赋值给页面里面
                            $("#TrIndexUserTd0").val(response.id);
                            $("#TrIndexUserTd1").val(response.auth_name);
                            $("#TrIndexUserTd2").val(response.pid);
                            $("#TrIndexUserTd3").val(response.auth_c);
                            $("#TrIndexUserTd4").val(response.auth_a);
                            $("#TrIndexUserTd5").val(response.is_nav);
                            
                        }
                    }
                });
            
            /*点击提交*/
            $("#myModalSuccess").click(function(){

                /*获取到弹出页面输入框你改的内容*/
                var newTrIndexUserTd0 = $("#TrIndexUserTd0").val();     //权限id
                var newTrIndexUserTd1 = $("#TrIndexUserTd1").val();     //权限名称
                var newTrIndexUserTd2 = $("#TrIndexUserTd2").val();     //是否顶级权限
                var newTrIndexUserTd3 = $("#TrIndexUserTd3").val();     //控制器
                var newTrIndexUserTd4 = $("#TrIndexUserTd4").val();     //方法
                var newTrIndexUserTd5 = $("#TrIndexUserTd5").val();     //是否菜单项
            
                 //组装要发送的数据
                var data = {
                     'id'       : newTrIndexUserTd0,
                    'auth_name' : newTrIndexUserTd1,
                     'pid'      : newTrIndexUserTd2,
                    'auth_c'    : newTrIndexUserTd3,
                    'auth_a'    : newTrIndexUserTd4,
                    'is_nav'    : newTrIndexUserTd5
                };

                //发送Ajax请求
                $.ajax({
                    'url':'__CONTROLLER__/auth_edit',
                    'type':'post',
                    'data':data,
                    'dataType':'json',
                    'success':function(response){
                     //   console.log(response);
                        if(response.code != 10000){
                            //判断返回结果中的code ，不是10000都代表失败，提示错误信息
                            alert(response.msg);
                            return;
                        }else{
                            //修改成功刷新当前页面，同步数据库的数据
                            window.location.reload();
                        }
                    }
                });
                
            });
        });

        //刪除
        $(".demo-delete-row").click(function(){
            if(confirm('是否删除？'))
            {
                /*获取到你点击那一行的下标*/
                var TrIndex = $(this).parent().parent().index();
                /*获取到你点击的那一行里面的内容*/
                var TrIndexUser = $(".tbodyTr tr:eq("+TrIndex+") td:eq(0)").text();
                //获取id
                var id = TrIndexUser;
                //组装要发生的数据
                var data = {'id' : id};
                // console.log(data);
                // return;
                //发送ajax请求
                $.ajax({
                    'url':'__CONTROLLER__/auth_del',
                    'type':'post',
                    'data':data,
                    'dataType':'json',
                    'success':function(response){
                        //console.log(response);
                        if(response.code != 10000){
                            //判断返回结果中的code ，不是10000都代表失败，提示错误信息
                            alert(response.msg);
                            return;
                        }else{
                            //删除成功刷新当前页面，同步数据库数据
                            window.location.reload();
                        }
                    }
                });
            }
            
        });
    });