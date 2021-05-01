<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call([
            AssetCategorySeeder::class,
            AssetSeeder::class,
            BrandSeeder::class,
            BusinessSeeder::class,
            CategorySeeder::class,
            CustomerGroupSeeder::class,
            CustomerSeeder::class,
            EmployeeSeeder::class,
            ExpenseCategorySeeder::class,
            ExpenseSeeder::class,
            UnitSeeder::class,
            VatSdGroupSeeder::class,
            ProductSeeder::class,
            InvoiceItemSeeder::class,
            InvoiceSeeder::class,
            LocationSeeder::class,
            PaymentSeeder::class,
            SupplierSeeder::class,
            PurchaseOrderSeeder::class,
            QuotationSeeder::class,
            RoleSeeder::class,
            SaleReturnSeeder::class

        ]);

    }
}
