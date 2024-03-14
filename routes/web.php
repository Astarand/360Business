<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CompliancesController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuaranteeController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FooterLinkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**Home**/
Route::get('/', [HomeController::class, 'Index'])->name('home');

/**About Us**/
Route::get('/about', [AboutController::class, 'Index'])->name('about');

/**Services**/
Route::get('/services', [ServicesController::class, 'Index'])->name('services');

/**Start a Business**/
Route::get('/proprietorship', [BusinessController::class, 'Proprietorship'])->name('proprietorship');
Route::get('/partnership', [BusinessController::class, 'Partnership'])->name('partnership');
Route::get('/onepersoncompany', [BusinessController::class, 'OnePersonCompany'])->name('onepersoncompany');
Route::get('/llp', [BusinessController::class, 'LLP'])->name('llp');
Route::get('/pvt', [BusinessController::class, 'PVT'])->name('pvt');
Route::get('/nidihi', [BusinessController::class, 'Nidhi'])->name('nidhi');
Route::get('/section8', [BusinessController::class, 'Section8'])->name('section8');
Route::get('/ngo-trust', [BusinessController::class, 'NgoTrust'])->name('ngo-trust');
Route::get('e-commerce', [BusinessController::class, 'Ecommerce'])->name('e-commerce');

/**Registration**/
Route::get('/trade', [RegistrationController::class, 'Trade'])->name('trade');
Route::get('/gst', [RegistrationController::class, 'GST'])->name('gst');
Route::get('/msme', [RegistrationController::class, 'MSME'])->name('msme');
Route::get('/ptax', [RegistrationController::class, 'Ptax'])->name('ptax');
Route::get('/pfesic', [RegistrationController::class, 'PFESIC'])->name('pfesic');
Route::get('/fssai', [RegistrationController::class, 'FSSAI'])->name('fssai');
Route::get('/iso', [RegistrationController::class, 'ISO'])->name('iso');
Route::get('/fire', [RegistrationController::class, 'Fire'])->name('fire');
Route::get('/ayush', [RegistrationController::class, 'Ayush'])->name('ayush');
Route::get('/rera', [RegistrationController::class, 'RERA'])->name('rera');
Route::get('/labour', [RegistrationController::class, 'Labour'])->name('labour');
Route::get('/pollution', [RegistrationController::class, 'Pollution'])->name('pollution');
Route::get('/shop', [RegistrationController::class, 'Shop'])->name('shop');
Route::get('/dsc', [RegistrationController::class, 'DSC'])->name('dsc');
Route::get('/registered-office-change', [RegistrationController::class, 'RegisteredOfficeChange'])->name('registered-office-change');
Route::get('/add-remove-director', [RegistrationController::class, 'AddRemoveDirector'])->name('add-remove-director');
Route::get('/contract-labour', [RegistrationController::class, 'ContractLabour'])->name('contract-labour');
Route::get('/niti', [RegistrationController::class, 'Niti'])->name('niti');
Route::get('/trademark', [RegistrationController::class, 'Trademark'])->name('trademark');
Route::get('/international-trademark', [RegistrationController::class, 'IntrenationalTrademark'])->name('international-trademark');
Route::get('/trademark-objection', [RegistrationController::class, 'TrademarkObjection'])->name('trademark-objection');
Route::get('/copyright', [RegistrationController::class, 'Copyright'])->name('copyright');
Route::get('/iec', [RegistrationController::class, 'IEC'])->name('iec');
Route::get('/liquor', [RegistrationController::class, 'Liquor'])->name('liquor');
Route::get('/clinical', [RegistrationController::class, 'Clinical'])->name('clinical');
Route::get('/drag', [RegistrationController::class, 'Drag'])->name('drag');
Route::get('/startup', [RegistrationController::class, 'StartUp'])->name('startup');

/**Compliances**/
Route::get('/business-commencement', [CompliancesController::class, 'BusinessCommencement'])->name('business-commencement');
Route::get('/auditor-recruitment', [CompliancesController::class, 'AuditorRecruitment'])->name('auditor-recruitment');
Route::get('/annual-compliance', [CompliancesController::class, 'AnnualCompliance'])->name('annual-compliance');
Route::get('/p-tax-filling', [CompliancesController::class, 'PTaxFillings'])->name('p-tax-filling');
Route::get('/business-tax-filling', [CompliancesController::class, 'BusinessTaxFillings'])->name('business-tax-filling');
Route::get('/gst-return-filling', [CompliancesController::class, 'GSTReturnFilling'])->name('gst-return-filling');
Route::get('/gst-annual-filling', [CompliancesController::class, 'GSTAnnualFilling'])->name('gst-annual-filling');
Route::get('/tds-filling', [CompliancesController::class, 'TDSFilling'])->name('tds-filling');
Route::get('/pf-filling', [CompliancesController::class, 'PFFilling'])->name('pf-filling');
Route::get('/professional-tax', [CompliancesController::class, 'ProfessionalTax'])->name('professional-tax');
Route::get('/gst-invoicing', [CompliancesController::class, 'GSTInvoicing'])->name('gst-invoicing');
Route::get('/eway-bill', [CompliancesController::class, 'EWayBill'])->name('eway-bill');
Route::get('/form-16', [CompliancesController::class, 'Form16'])->name('form-16');
Route::get('/statutory-audit', [CompliancesController::class, 'StatutoryAudit'])->name('statutory-audit');
Route::get('/internal-audit', [CompliancesController::class, 'InternalAudit'])->name('internal-audit');
Route::get('/external-audit', [CompliancesController::class, 'ExternalAudit'])->name('external-audit');
Route::get('/compliance-audit', [CompliancesController::class, 'ComplianceAudit'])->name('compliance-audit');

/**Consulting**/
Route::get('/webel', [ConsultingController::class, 'Webel'])->name('webel');
Route::get('/property-tax-assessment', [ConsultingController::class, 'PropertyTaxAssessment'])->name('property-tax-assessment');
Route::get('/property-registration', [ConsultingController::class, 'PropertyRegistration'])->name('property-registration');
Route::get('/gst-notice', [ConsultingController::class, 'GSTNotice'])->name('gst-notice');
Route::get('/income-tax-notice', [ConsultingController::class, 'IncomeTaxNotice'])->name('income-tax-notice');
Route::get('/strike-off', [ConsultingController::class, 'StrikeOff'])->name('strike-off');
Route::get('/company-helth-checkup', [ConsultingController::class, 'CompanyHelthCheckup'])->name('company-helth-checkup');
Route::get('/hindu', [ConsultingController::class, 'Hindu'])->name('hindu');
Route::get('/management-consulting', [ConsultingController::class, 'ManagementConsulting'])->name('management-consulting');
Route::get('/account-outsourcing', [ConsultingController::class, 'AccountOutsourcing'])->name('account-outsourcing');
Route::get('/details-project-report', [ConsultingController::class, 'DetailsProjectReport'])->name('details-project-report');
Route::get('/nda', [ConsultingController::class, 'NDA'])->name('nda');
Route::get('/service-level-agreement', [ConsultingController::class, 'ServiceLevelAgreement'])->name('service-level-agreement');
Route::get('/business-contract', [ConsultingController::class, 'BusinessContract'])->name('business-contract');
Route::get('/power-of-attorney', [ConsultingController::class, 'PowerOfAttorney'])->name('power-of-attorney');
Route::get('/virtual-cfo-service', [ConsultingController::class, 'VirtualCfoService'])->name('virtual-cfo-service');
Route::get('/hr', [ConsultingController::class, 'HR'])->name('hr');
Route::get('/payroll-management', [ConsultingController::class, 'PayrollManagement'])->name('payroll-management');
Route::get('/360-tech', function () {
    return redirect()->away('https://360techservice.com/');
})->name('360-tech');
Route::get('/e-cashbook', function () {
    return redirect()->away('https://ongoingprojectdisplay.online/e-cashbook/signup');
})->name('e-cashbook');
Route::get('/legal-notice', [ConsultingController::class, 'LegalNotice'])->name('legal-notice');

/**Blog**/
Route::get('/blog', [BlogController::class, 'Blog'])->name('blog');
Route::get('/blogdetails', [BlogController::class, 'BlogDetails'])->name('blogdetails');

/**Career**/
Route::get('/career',[CareerController::class, 'Career']) ->name('career');

/**Case Studies**/
Route::get('/case' ,[CaseController::class,'Case']) ->name('case');
Route::get('/casedetails' ,[CaseController::class,'CaseDetails']) ->name('casedetails');

/**FAQ**/
Route::get('/faq', [FAQController::class, 'FAQ']) ->name('faq');

/**Pricing**/
Route::get('/spricing', [PricingController::class, 'Pricing']) ->name('pricing');

/**Partner With US**/
Route::get('/partner', [PartnerController::class, 'Partner']) ->name('partner');

/**Satisfaction Guarantee**/
Route::get('/guarantee', [GuaranteeController::class, 'Guarantee'])->name('guarantee');

/**Terms of Use**/
Route::get('terms',[TermsController::class, 'Terms'])->name('terms');

/**Privacy Policies**/
Route::get('privacy', [PrivacyController::class, 'Privacy']) ->name('privacy');

/**Contact Us**/
Route::get('/contact', [ContactController::class, 'Index'])->name('contact');

/**Footer Link**/
Route::get('/annual', [FooterLinkController::class, 'Annual'])->name('annual');
Route::get('/internal-extarnal-audit', [FooterLinkController::class, 'InternalExtrnalAudit'])->name('iea');
Route::get('/property-tax-assessment-mutation', [FooterLinkController::class, 'PropertyAndMutation'])->name('ptaxm');
Route::get('/property-registration-and-deed', [FooterLinkController::class, 'PropertyDeed'])->name('pd');
