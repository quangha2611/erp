$(document).ready(function () {
    var listOfProduct = [];
    var listOfEmployee = [];

    $('#customer_id').select2();
    $('#employeeSelect').select2();
    
    // get info customer by customer id
    $('#customer_id').change(function () {
        var id = $(this).val()
        $.ajax({
            url: "/crm/customer/infoCustomer",
            method: "GET",
            data: {
                id: id
            },
            success: function (res) {
                fillInfo(JSON.parse(res));
            }
        });
    });

    function fillInfo(customer) {
        document.getElementById('customer_name').value = customer.name;
        document.getElementById('customer_phone').value = customer.phone;
        document.getElementById('customer_address').value = customer.address;
        document.getElementById('customer_type').value = customer.type_id;
        document.getElementById('customer_email').value = customer.email;
        document.getElementById('customer_taxcode').value = customer.taxcode;
        document.getElementById('customer_website').value = customer.website;
        document.getElementById('customer_identification').value = customer.identification;
        document.getElementById('customer_identification_date').value = customer.identification_date;
        document.getElementById('customer_identification_place').value = customer.identification_place;
    }

    /////////////////////////////////////////

    // get list products by company id
    $('#supplyCompanyId').change(function () {
        var company_id = $(this).val()
        $('#companyId').val(company_id);
        $.ajax({
            url: "/crm/contract/getListProductsByCompany",
            method: "GET",
            data: {
                company_id: company_id
            },
            success: function (res) {
                fillProduct(JSON.parse(res));
            }
        });
    });

    function fillProduct(products) {
        productSelect = "<option value=\"\">-- Sản phẩm --</option>";
        products.forEach(product => {
            productSelect += "<option id = \"product" +  product.id + "\" value=\"" + product.id + "\">" + product.name + "</option>"
        });
        $('#productId').html(productSelect);
    }

    /////////////////////////////////////////

    // add product into list 
    $('#addProduct').click(function () {
        var product_id = $('#productId').val()
        if (product_id != null && product_id != '' && product_id != NaN) {
            $.ajax({
                url: "/crm/contract/infoProduct",
                method: "GET",
                data: {
                    product_id: product_id
                },
                success: function (res) {
                    var product = JSON.parse(res);
                    for (var key in listOfProduct) {
                        if (product.id == key) {
                            return false;
                        }
                    }

                    listOfProduct[product.id] = product;

                    var htmlProduct = '<tr>'
                    + '<input type="hidden" name="contract_product[]" value="' + product.id + '">'
                    + '<td> <input type="text" readonly name="product_name[]" value="' +  product.name + '"> </td>'  //name
                    + '<td> <input min="1" name="contract_product_amount[]" id="product' + product.id + 'amount" type="number" value="1" required> </td>' // amount
                    + '<td> <input min="1" type="number" value="1"> </td>' //months
                    + '<td> <input id="product' + product.id + 'price" type="text" readonly value="' +  product.price + '"> </td>' // price
                    + '<td> <input id="product' + product.id + 'vat" type="text" readonly value="' +  product.vat + '%"> </td>' // VAT
                    + '<td> <input type="text" readonly> </td>' //discount
                    + '<td colspan="2"> <input type="text" readonly> </td>' //gift months
                    + '<td> <input id="product' + product.id + 'totalMoney" type="text" readonly value=""> </td>' //total money
                    + '</tr>'

                    $('#listProducts').append(htmlProduct);

                    renderListOfProduct();

                    //add event listener
                    addEventChangeMountOfProduct(product);
                }
            });
        }
    });

    function renderListOfProduct() {
        var totalMoneyAll = document.getElementById('totalMoneyAll');
        totalMoneyAll.value = 0;
        for (var key in listOfProduct) {
            var amountOfProduct = document.getElementById('product'+key+'amount');
            var priceOfProduct = document.getElementById('product'+key+'price');
            var vatOfProduct = document.getElementById('product'+key+'vat');
            var totalMoneyOfProduct = document.getElementById('product'+key+'totalMoney');

            totalMoneyOfProduct.value =  parseInt(amountOfProduct.value)*parseInt(priceOfProduct.value)*(parseInt(vatOfProduct.value)+100)/100;

            totalMoneyAll.value = parseInt(totalMoneyAll.value) + parseInt(totalMoneyOfProduct.value);
        }
        renderListOfEmployee();
    }

    function addEventChangeMountOfProduct(product) {
        var amountOfProduct = document.getElementById('product'+product.id+'amount');
        
        amountOfProduct.addEventListener('change', function() {
            renderListOfProduct();
            if (listOfEmployee.length > 0) {
                renderListOfEmployee();
            }
        })
    }

    /////////////////////////////////////////
    $('#addEmployee').click(function () {
        var employeeSelect = $('#employeeSelect').val();
        if (employeeSelect != null && employeeSelect != '' && employeeSelect != NaN) {
            $.ajax({
                url: '/crm/contract/infoEmployee',
                method: 'GET',
                data: {
                    user_id : employeeSelect,
                },
                success: function(res) {
                    var employee = JSON.parse(res);
                                        
                    while (checkExistEmpoyee(employee.id)) {
                        employee.id += 'x';
                    }   

                    listOfEmployee[employee.id] = employee;

                    var htmlEmployee = '<tr>'
                    + '<input type="hidden" name="employee_product_employee[]" value="' + employee.id + '" >'
                    + '<td><input type="text" readonly name="employee_name[]" value=\"' + employee.name + '\"></td>' // name
                    + '<td>'
                        + '<select style="width: 100%" name="employee_product_product[]" id="employee' + employee.id + 'product" required></select>'
                    + '</td>' //product
                    + '<td><input type="text"></td>' //target
                    + '<td><input name="employee_product_percent[]" id="employee' + employee.id + 'percent" type="number" min="0" max="100" value="0" required></td>' //sale percent
                    + '<td><input id="employee' + employee.id + 'money" type="text"></td>' //money
                    + '</tr>'

                    $('#listEmployees').append(htmlEmployee);

                    renderListOfEmployee();

                    //add event listener
                    addEventChangeSalePercent(employee);
                }
            })
        }
    });

    function checkExistEmpoyee(employeeId) {
        for (var key in listOfEmployee) {
            if (employeeId == key) {
                return true;
            }
        }
        return false;
    }

    function renderListOfEmployee() {
        for (var keyE in listOfEmployee) {
            var percentOfEmployee = document.getElementById('employee'+keyE+'percent');
            var productOfEmployee = document.getElementById('employee'+keyE+'product');
            var moneyOfEmployee   = document.getElementById('employee'+keyE+'money');
            var oldProductOfEmployee = productOfEmployee.value;

            productOfEmployee.innerHTML = '<option value="">-- Sản phẩm --</option>';

            for (var keyP in listOfProduct) {
                if (keyP != oldProductOfEmployee) {
                    productOfEmployee.innerHTML += '<option value="' + listOfProduct[keyP].id + '">' + listOfProduct[keyP].name + '</option>';
                } else {
                    productOfEmployee.innerHTML += '<option value="' + listOfProduct[keyP].id + '" selected>' + listOfProduct[keyP].name + '</option>';
                }
            }

            if (productOfEmployee.value != '' && percentOfEmployee.value != '') {
                moneyOfEmployee.value = parseInt(document.getElementById('product'+oldProductOfEmployee+'totalMoney').value)*parseInt(percentOfEmployee.value)/100;
            }
        }
    }

    function addEventChangeSalePercent(employee) {
        // event change product
        productOfEmployee = document.getElementById('employee'+employee.id+'product');
        productOfEmployee.addEventListener('change', function () {
            renderListOfEmployee();
        })

        //event change prcent
        percentOfEmployee = document.getElementById('employee' +employee.id+'percent');
        percentOfEmployee.addEventListener('change', function () {
            renderListOfEmployee();
        })
    }

});
