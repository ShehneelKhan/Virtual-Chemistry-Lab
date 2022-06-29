using System.Collections;
using System.Collections.Generic;
using System.Threading;
using UnityEngine;
using UnityEngine.UI;
 using UnityEngine.SceneManagement;

public class CheckPos : MonoBehaviour
{


    public GameObject tick;

    public GameObject beaker;
    public GameObject burner;
    public GameObject glass_tube;
    public GameObject retord_stand;
    public GameObject thermometer;
    public GameObject tripod_stand;
    public GameObject wire_gauze;
    public GameObject capillary_tube;

    public  GameObject arrow_down;
    public  GameObject arrow_down2;
    public  GameObject arrow_down3;
    public  GameObject arrow_down4;
    public  GameObject arrow_down5;
    public  GameObject arrow_down6;
    public  GameObject arrow_down7;
    public  GameObject arrow_down8;
      
   
    
   
        

    public Text text_retord;
    public Text text_burner;
    public string sceneName;
    private Scene currentScene;


    public int c = 0;


    // Start is called before the first frame update
    void Start()
    {


     c+=1;
        // Create a temporary reference to the current scene.
     currentScene = SceneManager.GetActiveScene();
      // Retrieve the name of this scene.
      sceneName = currentScene.name;


     


    }

    // Update is called once per frame
    void Update()
    {

        float posBeaker = beaker.transform.position.x;
        float posBurner = burner.transform.position.x;
        float posGlass_tube = glass_tube.transform.position.x;
        float posRetord_stand = retord_stand.transform.position.x;
        float posThermometer = thermometer.transform.position.x;
        float posTripod_stand = tripod_stand.transform.position.x;
        float posWire_gauze = wire_gauze.transform.position.x;
        float posCapillary_tube = capillary_tube.transform.position.x;
     
         if(sceneName=="Lab3"){

        if(c<=1){
        Destroy(beaker.GetComponent<ChangeSizeBeaker>());
        Destroy(beaker.GetComponent<BoxCollider2D>());

       
        
         //Destroy(burner.GetComponent<ChangeSizeBurner>());
        Destroy(burner.GetComponent<BoxCollider2D>());


         Destroy(glass_tube.GetComponent<ChangeSizeGlassTube>());
        Destroy(glass_tube.GetComponent<BoxCollider2D>());

      
      //   Destroy(capillary_tube.GetComponent<ChangeSizeCapTube>());
         Destroy(capillary_tube.GetComponent<BoxCollider2D>());





         Destroy(thermometer.GetComponent<ChangeSizeThermometer>());
        Destroy(thermometer.GetComponent<BoxCollider2D>());


         Destroy(tripod_stand.GetComponent<ChangeSizeTripod>());
        Destroy(tripod_stand.GetComponent<BoxCollider2D>());


        Destroy(wire_gauze.GetComponent<ChangeSizeWireGuaze>());
        Destroy(wire_gauze.GetComponent<BoxCollider2D>());



        if(posRetord_stand == 0.3f){// && posBurner == 1.49f && posGlass_tube == 1.42f && posBeaker == 1.44f && posThermometer == 1.42f && posTripod_stand == 1.47f && posWire_gauze == 1.43f ) {
           
        
           glass_tube.AddComponent<ChangeSizeGlassTube>();
           glass_tube.AddComponent<BoxCollider2D>();
           arrow_down.SetActive(false);
           arrow_down3.SetActive(false);
           arrow_down4.SetActive(false);
           arrow_down5.SetActive(false);
           arrow_down6.SetActive(false);
           arrow_down7.SetActive(false);

           if(sceneName=="Lab3"){
           arrow_down8.SetActive(false);

            }

           arrow_down2.SetActive(true);


            
        }

        if(posGlass_tube == 1.42f){

               capillary_tube.AddComponent<ChangeSizeGlassTube>();
               
                capillary_tube.AddComponent<BoxCollider2D>();

                arrow_down.SetActive(false);
                arrow_down2.SetActive(false);
                arrow_down4.SetActive(false);
                arrow_down5.SetActive(false);
                arrow_down6.SetActive(false);
                arrow_down7.SetActive(false);
                 arrow_down3.SetActive(false);



                if(sceneName=="Lab3"){
                  arrow_down8.SetActive(true);
                }
        }

        if(posCapillary_tube == 1.41f){
            thermometer.AddComponent<ChangeSizeThermometer>();
                thermometer.AddComponent<BoxCollider2D>();

                arrow_down.SetActive(false);
                arrow_down2.SetActive(false);
                arrow_down4.SetActive(false);
                arrow_down5.SetActive(false);
                arrow_down6.SetActive(false);
                arrow_down7.SetActive(false);

                 if(sceneName=="Lab3"){
                  arrow_down8.SetActive(false);
                 }
                  arrow_down3.SetActive(true);



             
        }


        if(posThermometer == 1.68f){
             tripod_stand.AddComponent<ChangeSizeTripod>();
             tripod_stand.AddComponent<BoxCollider2D>();
                arrow_down.SetActive(false);
                arrow_down3.SetActive(false);
                arrow_down2.SetActive(false);
                arrow_down5.SetActive(false);
                arrow_down6.SetActive(false);
                arrow_down7.SetActive(false);
                 if(sceneName=="Lab3"){
                  arrow_down8.SetActive(false);
                 }

             arrow_down4.SetActive(true);
        
        }

        if(posTripod_stand == 1.47f){
                wire_gauze.AddComponent<ChangeSizeWireGuaze>();
                wire_gauze.AddComponent<BoxCollider2D>();
                   arrow_down.SetActive(false);
                arrow_down3.SetActive(false);
                arrow_down4.SetActive(false);
                arrow_down2.SetActive(false);
                arrow_down6.SetActive(false);
                arrow_down7.SetActive(false);

                 if(sceneName=="Lab3"){
                 arrow_down8.SetActive(false);
                 }



                arrow_down5.SetActive(true);
                
                
        }

        if(posWire_gauze == 1.43f) {
                 beaker.AddComponent<ChangeSizeBeaker>();
                beaker.AddComponent<BoxCollider2D>();
                   arrow_down.SetActive(false);
                arrow_down3.SetActive(false);
                arrow_down4.SetActive(false);
                arrow_down5.SetActive(false);
                arrow_down2.SetActive(false);
                arrow_down7.SetActive(false);

                 if(sceneName=="Lab3"){
                  arrow_down8.SetActive(false);
                 }




                arrow_down6.SetActive(true);
        }


        if(posBeaker == 1.44f) {
                //burner.AddComponent<ChangeSizeBurner>();
                burner.AddComponent<BoxCollider2D>();
                   arrow_down.SetActive(false);
                arrow_down3.SetActive(false);
                arrow_down4.SetActive(false);
                arrow_down5.SetActive(false);
                arrow_down6.SetActive(false);
                arrow_down2.SetActive(false);

                 if(sceneName=="Lab3"){
                  arrow_down8.SetActive(false);
                 }




                arrow_down7.SetActive(true);
        }


        if(posBurner == 1.49f){
                      tick.SetActive(true);
                      text_burner.gameObject.SetActive(true);
                      c+=1;
                      
                         arrow_down.SetActive(false);
                          arrow_down2.SetActive(false);

                        arrow_down3.SetActive(false);
                        arrow_down4.SetActive(false);
                        arrow_down5.SetActive(false);
                        arrow_down6.SetActive(false);
                        arrow_down7.SetActive(false);
                         if(sceneName=="Lab3"){
                           arrow_down8.SetActive(false);
                         }
                      
          
        }

        
      }
    }


          else if (sceneName == "Lab2"){

               if (posRetord_stand != 0.3f || posBurner != 1.49f || posGlass_tube != 1.42f || posBeaker != 1.44f || posThermometer != 1.68f || posTripod_stand != 1.47f || posWire_gauze != 1.43f) {
                tick.SetActive(false);
         
        }

        else if(posRetord_stand == 0.3f && posBurner == 1.49f && posGlass_tube == 1.42f && posBeaker == 1.44f && posThermometer == 1.68f && posTripod_stand == 1.47f && posWire_gauze == 1.43f) {
                tick.SetActive(true);
        }

     


        if(c<=1){
        Destroy(beaker.GetComponent<ChangeSizeBeaker>());
        Destroy(beaker.GetComponent<BoxCollider2D>());

       
        
         //Destroy(burner.GetComponent<ChangeSizeBurner>());
        Destroy(burner.GetComponent<BoxCollider2D>());


         Destroy(glass_tube.GetComponent<ChangeSizeGlassTube>());
        Destroy(glass_tube.GetComponent<BoxCollider2D>());

      



         Destroy(thermometer.GetComponent<ChangeSizeThermometer>());
        Destroy(thermometer.GetComponent<BoxCollider2D>());


         Destroy(tripod_stand.GetComponent<ChangeSizeTripod>());
        Destroy(tripod_stand.GetComponent<BoxCollider2D>());


        Destroy(wire_gauze.GetComponent<ChangeSizeWireGuaze>());
        Destroy(wire_gauze.GetComponent<BoxCollider2D>());



        if(posRetord_stand == 0.3f){// && posBurner == 1.49f && posGlass_tube == 1.42f && posBeaker == 1.44f && posThermometer == 1.42f && posTripod_stand == 1.47f && posWire_gauze == 1.43f ) {
           
        
           glass_tube.AddComponent<ChangeSizeGlassTube>();
           glass_tube.AddComponent<BoxCollider2D>();
           arrow_down.SetActive(false);
           arrow_down3.SetActive(false);
           arrow_down4.SetActive(false);
           arrow_down5.SetActive(false);
           arrow_down6.SetActive(false);
           arrow_down7.SetActive(false);
            if(sceneName=="Lab3"){
             arrow_down8.SetActive(false);
            }


           arrow_down2.SetActive(true);


            
        }

        if(posGlass_tube == 1.42f){

  
                arrow_down.SetActive(false);
                arrow_down2.SetActive(false);
                arrow_down4.SetActive(false);
                arrow_down5.SetActive(false);
                arrow_down6.SetActive(false);
                arrow_down7.SetActive(false);
                 arrow_down3.SetActive(false);



            if(sceneName=="Lab3"){
               arrow_down8.SetActive(true);
               }
        }



        if(posThermometer == 1.68f){
             tripod_stand.AddComponent<ChangeSizeTripod>();
             tripod_stand.AddComponent<BoxCollider2D>();
                arrow_down.SetActive(false);
                arrow_down3.SetActive(false);
                arrow_down2.SetActive(false);
                arrow_down5.SetActive(false);
                arrow_down6.SetActive(false);
                arrow_down7.SetActive(false);

                 if(sceneName=="Lab3"){
                  arrow_down8.SetActive(false);

                  }



             arrow_down4.SetActive(true);
        
        }

        if(posTripod_stand == 1.47f){
                wire_gauze.AddComponent<ChangeSizeWireGuaze>();
                wire_gauze.AddComponent<BoxCollider2D>();
                   arrow_down.SetActive(false);
                arrow_down3.SetActive(false);
                arrow_down4.SetActive(false);
                arrow_down2.SetActive(false);
                arrow_down6.SetActive(false);
                arrow_down7.SetActive(false);

                 if(sceneName=="Lab3"){
                 arrow_down8.SetActive(false);

                 }


                arrow_down5.SetActive(true);
                
                
        }

        if(posWire_gauze == 1.43f) {
                 beaker.AddComponent<ChangeSizeBeaker>();
                beaker.AddComponent<BoxCollider2D>();
                   arrow_down.SetActive(false);
                arrow_down3.SetActive(false);
                arrow_down4.SetActive(false);
                arrow_down5.SetActive(false);
                arrow_down2.SetActive(false);
                arrow_down7.SetActive(false);

                 if(sceneName=="Lab3"){
                 arrow_down8.SetActive(false);
                 }




                arrow_down6.SetActive(true);
        }


        if(posBeaker == 1.44f) {
                //burner.AddComponent<ChangeSizeBurner>();
                burner.AddComponent<BoxCollider2D>();
                   arrow_down.SetActive(false);
                arrow_down3.SetActive(false);
                arrow_down4.SetActive(false);
                arrow_down5.SetActive(false);
                arrow_down6.SetActive(false);
                arrow_down2.SetActive(false);
                 if(sceneName=="Lab3"){
                 arrow_down8.SetActive(false);
                 }




                arrow_down7.SetActive(true);
        }


        if(posBurner == 1.49f){
                      tick.SetActive(true);
                      text_burner.gameObject.SetActive(true);
                      c+=1;
                      
                         arrow_down.SetActive(false);
                          arrow_down2.SetActive(false);

                        arrow_down3.SetActive(false);
                        arrow_down4.SetActive(false);
                        arrow_down5.SetActive(false);
                        arrow_down6.SetActive(false);
                        arrow_down7.SetActive(false);
                         if(sceneName=="Lab3"){
                         arrow_down8.SetActive(false);
                         }
                      
          
        }

        }
            
        }




     }
                
           

        
}




            

