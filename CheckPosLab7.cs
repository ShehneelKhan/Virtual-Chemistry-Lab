using System.Collections;
using System.Collections.Generic;
using System.Threading;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class CheckPosLab7 : MonoBehaviour
{


    public GameObject electrodes;
    public GameObject bulboff;
    public GameObject bulbon;
    public GameObject battery;
    public GameObject ethylalcohol;
    public GameObject nacl;
    public GameObject naoh;
    public GameObject sugar;

    public GameObject redwire;
    public GameObject redwire_2;
    public GameObject blackwire;
    public GameObject blackwire_2;

    public GameObject container_shadow;




  



    public  GameObject arrow_down;
    public  GameObject arrow_down2;
    public  GameObject arrow_down3;
    public  GameObject arrow_down4;
    public  GameObject arrow_down5;
    public  GameObject arrow_down6;
    public  GameObject arrow_down7;
    public  GameObject arrow_down8;

    public GameObject tick;
    public GameObject tick_2;
    public GameObject tick_3;
    public GameObject tick_4;
    
      

    public Text text_obj1;
    public Text text_obj2;
    public Text text_obj3;
    public Text text_obj4;


    public Text result_heading;
    public Text result;
    public Text result_2;


    


    



    public int c = 0;
    public static bool flag=false;



    float currentTime = 0f;
    float startingTime = 10f;


    [SerializeField] Text countdownText;






    // Start is called before the first frame update
    void Start()
    {

    currentTime = startingTime;
     c+=1;


     


    }

    

    // Update is called once per frame
    void Update()
    {

      

        
        float posBattery = battery.transform.position.x;
        float posBulboff = bulboff.transform.position.x;
        float posElectrodes = electrodes.transform.position.x;
        float posNacl = nacl.transform.position.x;
        float posNaoh = naoh.transform.position.x; 
        float posEthylalcohol = ethylalcohol.transform.position.x;
        float posSugar = sugar.transform.position.x;


        //Debug.Log(posOxalicacid);

        // if(posBowl==1.11f){
        //     // text_obj8.gameObject.SetActive(false);
        //     bowl.SetActive(false);
        //     bowl_shadow2.SetActive(false);
        //     emptyyellowbowl.SetActive(true);
        //     crystal.SetActive(true);
                            
        //                 }


    //      if(c<=1){
         
        
        
    //   //   Destroy(burner.GetComponent<ChangeSizeBurnerLab1>());
    //     //Destroy(burner.GetComponent<BoxCollider2D>());
    //     Destroy(rod.GetComponent<ChangeSizeRod>());
    //     Destroy(rod.GetComponent<BoxCollider2D>());

      
    //      if(posBurner==-3.01f){

    //        rod.AddComponent<ChangeSizeRod>();
    //        rod.AddComponent<BoxCollider2D>();
    //        arrow_down.SetActive(false);
    //        arrow_down2.SetActive(true);

    //      }

    //      if(posRod==-3.15f){
    //         arrow_down2.SetActive(false);
    //         tick.SetActive(true);
    //         text_obj2.gameObject.SetActive(true);
    //      }




    //     }
//Debug.Log(posRetord_stand);

            bulbon.SetActive(false);
            bulboff.SetActive(true);
            result_heading.gameObject.SetActive(false);
            result.gameObject.SetActive(false);
            result_2.gameObject.SetActive(false);






            if(posEthylalcohol==-6.64f || posSugar==-6.64f){
                result_heading.gameObject.SetActive(true);
                result.gameObject.SetActive(false);
                result_2.gameObject.SetActive(true);
            }
      

            if(posNacl==-6.64f || posNaoh==-6.64f){

                bulboff.SetActive(false);
                bulbon.SetActive(true);

                result_heading.gameObject.SetActive(true);
                result_2.gameObject.SetActive(false);
                result.gameObject.SetActive(true);

        

                }

            // bulbon.SetActive(false);
            // bulboff.SetActive(true);




               if(posBulboff==-3.34f && posElectrodes==-6.67f && posBattery==0.71f && posNacl==-3.85f && posNaoh==-1.38f && posEthylalcohol==-6.26f && posSugar==0.95f){
                   flag=true;
                   Debug.Log("Success!");

               }




           

    
                    //   tick.SetActive(true);
                    //   text_burner.gameObject.SetActive(true);
                    //   c+=1;
                      
                    //      arrow_down.SetActive(false);
                    //       arrow_down2.SetActive(false);

                    //     arrow_down3.SetActive(false);
                    //     arrow_down4.SetActive(false);
                    //     arrow_down5.SetActive(false);
                    //     arrow_down6.SetActive(false);
                    //     arrow_down7.SetActive(false);
                 
                    // Debug.Log("Condition Met");
                    // // text_obj1.gameObject.SetActive(false);
                    // // text_obj2.gameObject.SetActive(true);
                    // copper_sulphate_shadow.SetActive(true);
                    // copper_sulphate.SetActive(true);
                    
                    // if(posCopperSulphate==-4.54f){
                    //     // text_obj2.gameObject.SetActive(false);
                    //     // text_obj3.gameObject.SetActive(true);
                    //     copper_sulphate.SetActive(false);
                    //     copper_sulphate_shadow.SetActive(false);
                    //     emptybowl.SetActive(true);
                    //     beaker.SetActive(false);
                    //     beaker_shadow.SetActive(false);
                    //     morewater.SetActive(true);
                    //     morewater_shadow.SetActive(true);
                    //     if (posMoreWater==1){
                    //         // text_obj3.gameObject.SetActive(false);
                    //         // text_obj4.gameObject.SetActive(true);
                    //         morewater.SetActive(false);
                    //         morewater_shadow.SetActive(false);
                    //         pouring.SetActive(true);
                    //         beaker_empty.SetActive(false);
                    //         beaker_empty_shadow.SetActive(false);
                    //         rfiltered.SetActive(true);
                    //         rfiltered_shadow.SetActive(true);
                    //         emptybowl.SetActive(false);
                    //         if(posRfiltered==-6.4f){
                    //             // text_obj4.gameObject.SetActive(false);
                    //             // text_obj6.gameObject.SetActive(true);
                    //             pouring.SetActive(false);
                    //             rfiltered.SetActive(false);
                    //             rfiltered_shadow.SetActive(false);
                    //             pouring_2.SetActive(true);





                    //             if(fireanimation.activeInHierarchy==true){

                    //                 countdownText.gameObject.SetActive(true);

                    //                 currentTime -= 1 * Time.deltaTime;
                    //                 countdownText.text = currentTime.ToString("0");
                                    

                    //             if(currentTime <= 3){
                    //                 countdownText.color = Color.red;
                    //             }


                    //             if(currentTime <= 0){
                    //                 // text_obj6.gameObject.SetActive(false);
                    //                 // text_obj7.gameObject.SetActive(true);
                    //                 currentTime = 0;
                    //                 countdownText.gameObject.SetActive(false);
                    //                 bowl_shadow.SetActive(false);
                    //                 bowl_shadow2.SetActive(true);
                    //                 paper.SetActive(true);
                              
                                    
                                  


                    //             }

                    //              }
                             
                            
                    //         }

                           
                    //     }
                 
                        

                   // }
         
                }
                
                  
}
    



                
                
        



    

       










            

